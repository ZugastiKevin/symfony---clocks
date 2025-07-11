<?php
    namespace App\Service;

use App\DTO\PercentageInputDto;
use App\DTO\PercentageOutputDto;

    class Percentage
    {
        public function calculPercent(PercentageInputDto $input): PercentageOutputDto 
        {
            $value = $input->total * ( $input->percentage / 100);
            return new PercentageOutputDto($value);
        }
    }