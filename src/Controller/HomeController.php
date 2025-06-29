<?php

namespace App\Controller;

use App\Repository\ClocksRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ClocksRepository $repository): Response
    {
        $clocks = $repository->findBy([], ['id' => 'DESC'], 4);
        
        return $this->render('home/home.html.twig', [
            'clocks' => $clocks,
        ]);
    }
}
