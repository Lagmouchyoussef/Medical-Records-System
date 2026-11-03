<?php

namespace App\Service;

use App\Repository\FeedbacksRepository;
use App\Repository\MessageRepository;
use App\Repository\PatientRepository;

/**
 * Builds every figure shown on the Home dashboard.
 */
class DashboardStats
{
    private const MONTHS_BACK = 5;
    private const MONTHS_FORWARD = 1;

    public function __construct(
        private readonly PatientRepository $patients,
        private readonly MessageRepository $messages,
        private readonly FeedbacksRepository $feedbacks,
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function build(?\DateTimeImmutable $now = null): array
    {
        $now ??= new \DateTimeImmutable();
        $today = $now->setTime(0, 0);

        $patients = $this->patients->findAll();
        $messages = $this->messages->findAll();
        $feedbacks = $this->feedbacks->findAll();

        // ---- Patient figures -------------------------------------------------
        $weekEnd = $today->modify('+7 days');
        $upcoming = [];
        $past = 0;
        $unscheduled = 0;
        $byIllness = [];
        $byDoctor = [];

        foreach ($patients as $patient) {
            $illness = trim((string) $patient->getIllness()) ?: 'Unknown';
            $doctor = trim((string) $patient->getAssignedDoctor()) ?: 'Unassigned';
            $byIllness[$illness] = ($byIllness[$illness] ?? 0) + 1;
            $byDoctor[$doctor] = ($byDoctor[$doctor] ?? 0) + 1;

            $visit = $patient->getVisitDate();
            if (null === $visit) {
                ++$unscheduled;
                continue;
            }
            $visit = \DateTimeImmutable::createFromInterface($visit);
            if ($visit >= $now) {
                $upcoming[] = ['patient' => $patient, 'date' => $visit];
            } else {
                ++$past;
            }
        }

        usort($upcoming, static fn (array $a, array $b) => $a['date'] <=> $b['date']);
        $visitsThisWeek = \count(array_filter($upcoming, static fn (array $v) => $v['date'] < $weekEnd));

        arsort($byIllness);
        arsort($byDoctor);

        // Top 5 illnesses, everything else grouped as "Other".
        $illnessLabels = array_keys($byIllness);
        $illnessValues = array_values($byIllness);
        if (\count($illnessLabels) > 5) {
            $other = array_sum(\array_slice($illnessValues, 5));
            $illnessLabels = [...\array_slice($illnessLabels, 0, 5), 'Other'];
            $illnessValues = [...\array_slice($illnessValues, 0, 5), $other];
        }

        // ---- Monthly series (last 5 months + next month) ----------------------
        $months = [];
        $first = $today->modify('first day of this month')->modify('-'.self::MONTHS_BACK.' months');
        for ($i = 0; $i <= self::MONTHS_BACK + self::MONTHS_FORWARD; ++$i) {
            $months[] = $first->modify("+$i months");
        }
        $keys = array_map(static fn (\DateTimeImmutable $m) => $m->format('Y-m'), $months);
        $labels = array_map(static fn (\DateTimeImmutable $m) => $m->format('M Y'), $months);

        $series = static function (iterable $items, callable $dateOf) use ($keys): array {
            $counts = array_fill_keys($keys, 0);
            foreach ($items as $item) {
                $date = $dateOf($item);
                if ($date && isset($counts[$date->format('Y-m')])) {
                    ++$counts[$date->format('Y-m')];
                }
            }

            return array_values($counts);
        };

        $visitSeries = $series($patients, static fn ($p) => $p->getVisitDate());
        $messageSeries = $series($messages, static fn ($m) => $m->getSentAt());
        $feedbackSeries = $series($feedbacks, static fn ($f) => $f->getSentAt());

        // ---- Recent messages ---------------------------------------------------
        usort($messages, static fn ($a, $b) => ($b->getSentAt()?->getTimestamp() ?? 0) <=> ($a->getSentAt()?->getTimestamp() ?? 0));

        $monthKey = $now->format('Y-m');
        $messagesThisMonth = $messageSeries[array_search($monthKey, $keys, true)] ?? 0;

        return [
            'totals' => [
                'patients' => \count($patients),
                'doctors' => \count($byDoctor),
                'messages' => \count($messages),
                'feedbacks' => \count($feedbacks),
            ],
            'kpis' => [
                'visitsThisWeek' => $visitsThisWeek,
                'upcomingVisits' => \count($upcoming),
                'pastVisits' => $past,
                'unscheduled' => $unscheduled,
                'messagesThisMonth' => $messagesThisMonth,
            ],
            'upcoming' => \array_slice($upcoming, 0, 5),
            'recentMessages' => \array_slice($messages, 0, 4),
            'charts' => [
                'months' => $labels,
                'visits' => $visitSeries,
                'messages' => $messageSeries,
                'feedbacks' => $feedbackSeries,
                'illnessLabels' => $illnessLabels,
                'illnessValues' => $illnessValues,
                'doctorLabels' => \array_slice(array_keys($byDoctor), 0, 6),
                'doctorValues' => \array_slice(array_values($byDoctor), 0, 6),
                'visitStatus' => [
                    'labels' => ['Upcoming', 'Completed', 'Unscheduled'],
                    'values' => [\count($upcoming), $past, $unscheduled],
                ],
            ],
        ];
    }
}
