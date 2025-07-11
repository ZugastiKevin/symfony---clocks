<?php
    namespace App\Service;

    use App\DTO\ConvertInputDto;
    use App\DTO\ConvertOutputDto;

    class Convert
    {
        public function ConvertDevise(ConvertInputDto $input): ConvertOutputDto 
        {
            $target = [
                'EUR' => 1.0,
                'USD' => 1.1,
                'GBP' => 0.85,
                'JPY' => 140,
            ];
            

            $fromTarget = $target[$input->from];
            $toTarget = $target[$input->to];

            $amount = $input->devise / $fromTarget;
            $converted = round($amount * $toTarget, 2);

            return new ConvertOutputDto(
                $input->devise,
                $input->from,
                $input->to,
                $converted,
                round($toTarget / $fromTarget, 4)
            );
        }
    }