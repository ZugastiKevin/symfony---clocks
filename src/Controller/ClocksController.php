<?php

namespace App\Controller;

use App\Entity\Clocks;
use App\Form\ClocksTypeForm;
use App\Repository\ClocksRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class ClocksController extends AbstractController
{
    #[Route('/clocks', name: 'clocks')]
    public function clocks(ClocksRepository $repository): Response
    {
        $clocks = $repository->findAll();

        return $this->render('clocks/clocks.html.twig', [
            'clocks' => $clocks,
        ]);
    }

    #[Route('/clock/{id}', name: 'clock')]
    public function clock(Clocks $clocks): Response
    {
        return $this->render('clocks/clock.html.twig', [
            'clock' => $clocks,
        ]);
    }

    #[Route('/update_clock/{id}', name: 'update_clock')]
    #[Route('/create_clock', name: 'create_clock')]
    public function addClock(?Clocks $clocks, Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!$clocks) {
            $clocks = new Clocks;
        }

        $form = $this->createForm(ClocksTypeForm::class, $clocks);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $clocks->setUser($this->getUser());
            $entityManager->persist($clocks);
            $entityManager->flush();
                
            return $this->redirectToRoute('home');
        }

        return $this->render('clocks/createUpdateClocks.html.twig', [
            'clockCreateForm' => $form->createView(),
            'clockUpdateForm' => $clocks->getId() !== null,
        ]);
    }

    #[Route('/delete_clock/{id}', name: 'delete_clock')]
    public function deleteClock(Clocks $clocks, Request $request, EntityManagerInterface $entityManager)
    {
        if($this->isCsrfTokenValid("SUP". $clocks->getId(),$request->get('_token'))){
            $entityManager->remove($clocks);
            $entityManager->flush();
            return $this->redirectToRoute('home');
        }
    }
}
