<?php

namespace App\Controller;

use App\Repository\ClocksRepository;
use App\Service\Date;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ClocksRepository $repository, Date $messageDate): Response
    {
        $clocks = $repository->findBy([], ['id' => 'DESC'], 4);

        $date = $messageDate->messageGenerator(date("Y-m-d", strtotime("+2 day")));
        
        return $this->render('home/home.html.twig', [
            'clocks' => $clocks,
            'date' => $date,
        ]);
    }
}
