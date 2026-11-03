<?php

namespace App\Controller;

use App\Entity\Message;
use App\Entity\Patient;
use App\Form\MessageType;
use App\Form\PatientType;
use App\Repository\MessageRepository;
use App\Repository\PatientRepository;
use App\Service\DashboardStats;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Controller extends AbstractController
{
    public function index(DashboardStats $stats)
    {
        return $this->render("home.html.twig", ['stats' => $stats->build()]);
    }

    public function contact(Request $request, EntityManagerInterface $entityManager, MessageRepository $messageRepository)
    {
        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $message->setSentAt(new \DateTime());
            $entityManager->persist($message);
            $entityManager->flush();

            $this->addFlash('success', 'Your message has been sent successfully!');

            return $this->redirectToRoute('contact');
        }

        return $this->render('message/contact.html.twig', [
            'form' => $form->createView(),
            'messages' => $messageRepository->findAll(),
        ]);
    }

    // Patient CRUD methods

    public function patientsIndex(Request $request, PatientRepository $patientRepository): Response
    {
        $query = trim((string) $request->query->get('q', ''));
        $patients = $patientRepository->findAll();

        if ('' !== $query) {
            $patients = array_values(array_filter($patients, static fn (Patient $p) => false !== stripos(
                $p->getName().' '.$p->getIllness().' '.$p->getAssignedDoctor(),
                $query
            )));
        }

        return $this->render('patient/index.html.twig', [
            'patients' => $patients,
            'query' => $query,
        ]);
    }

    public function patientsNew(Request $request, EntityManagerInterface $entityManager): Response
    {
        $patient = new Patient();
        $form = $this->createForm(PatientType::class, $patient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($patient);
            $entityManager->flush();

            return $this->redirectToRoute('patient_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('patient/new.html.twig', [
            'patient' => $patient,
            'form' => $form,
        ]);
    }

    public function patientsEdit(Request $request, Patient $patient, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PatientType::class, $patient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('patient_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('patient/edit.html.twig', [
            'patient' => $patient,
            'form' => $form,
        ]);
    }

    public function patientsDelete(Request $request, Patient $patient, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$patient->getId(), $request->request->get('_token'))) {
            $entityManager->remove($patient);
            $entityManager->flush();
        }

        return $this->redirectToRoute('patient_index', [], Response::HTTP_SEE_OTHER);
    }

    // Message CRUD methods


    public function messagesIndex(MessageRepository $messageRepository): Response
    {
        return $this->render('message/index.html.twig', [
            'messages' => $messageRepository->findAll(),
        ]);
    }


    public function messagesNew(Request $request, EntityManagerInterface $entityManager): Response
    {
        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($message);
            $entityManager->flush();


            return $this->redirectToRoute('message_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('message/new.html.twig', [
            'message' => $message,
            'form' => $form,
        ]);
    }


    public function messagesShow(Message $message): Response
    {
        return $this->render('message/show.html.twig', [
            'message' => $message,
        ]);
    }


    public function messagesEdit(Request $request, Message $message, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('message_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('message/edit.html.twig', [
            'message' => $message,
            'form' => $form,
        ]);
    }


    public function messagesDelete(Request $request, Message $message, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$message->getId(), $request->request->get('_token'))) {
            $entityManager->remove($message);
            $entityManager->flush();
        }

        return $this->redirectToRoute('message_index', [], Response::HTTP_SEE_OTHER);
    }


}
