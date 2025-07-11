<?php

namespace App\Controller;

use App\DTO\ConvertInputDto;
use App\Service\Convert;
use App\Service\Percentage;
use App\DTO\PercentageInputDto;
use App\Repository\ClocksRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(Request $request, ClocksRepository $repository, Percentage $percent, Convert $convert): Response
    {
        $clocks = $repository->findBy([], ['id' => 'DESC'], 4);

        // $total = floatval($request->get('number'));
        $total = floatval(11);
        // $percentage = floatval($request->get('percentage'));
        $percentage = floatval(10);

        $inputPercentDto = new PercentageInputDto($total, $percentage);
        $outputPercentDto = $percent->calculPercent($inputPercentDto);

        $devise = 100;
        $from = "EUR";
        $to = "USD";

        $inputConvertDto = new ConvertInputDto($devise, $from, $to);
        $outputConvertDto = $convert->ConvertDevise($inputConvertDto);
        
        return $this->render('home/home.html.twig', [
            'clocks' => $clocks,
            'percent' => $outputPercentDto,
            'money' => $outputConvertDto,
        ]);
    }
}
