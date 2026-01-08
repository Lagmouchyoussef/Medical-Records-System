<?php

namespace App\Controller;

use App\Entity\Feedbacks;
use App\Form\FeedbacksType;
use App\Repository\FeedbacksRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class FeedbacksController extends AbstractController
{

    #[Route('/feedbacks/', name: 'Feedbacks_index', methods: ['GET'])]
    public function index(FeedbacksRepository $FeedbacksRepository): Response
    {
        return $this->render('Feedbacks/index.html.twig', [
            'Feedbackss' => $FeedbacksRepository->findAll(),
        ]);
    }


    #[Route('/feedbacks/new', name: 'Feedbacks_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $Feedbacks = new Feedbacks();
        $form = $this->createForm(FeedbacksType::class, $Feedbacks);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($Feedbacks);
            $entityManager->flush();

            return $this->redirectToRoute('Feedbacks_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Feedbacks/new.html.twig', [
            'Feedbacks' => $Feedbacks,
            'form' => $form,
        ]);
    }



    #[Route('/feedbacks/{id}/edit', name: 'Feedbacks_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Feedbacks $Feedbacks, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FeedbacksType::class, $Feedbacks);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('Feedbacks_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Feedbacks/edit.html.twig', [
            'Feedbacks' => $Feedbacks,
            'form' => $form,
        ]);
    }


    #[Route('/feedbacks/{id}', name: 'Feedbacks_delete', methods: ['POST'])]
    public function delete(Request $request, Feedbacks $Feedbacks, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$Feedbacks->getId(), $request->request->get('_token'))) {
            $entityManager->remove($Feedbacks);
            $entityManager->flush();
        }

        return $this->redirectToRoute('Feedbacks_index', [], Response::HTTP_SEE_OTHER);
    }
}
