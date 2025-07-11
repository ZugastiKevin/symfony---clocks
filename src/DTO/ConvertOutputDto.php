<?php
    namespace App\DTO;

    class ConvertOutputDto
    {
        public float $originalAmount;
        public string $fromCurrency;
        public string $toCurrency;
        public float $convertedAmount;
        public float $rateUsed;

        public function __construct(
            float $originalAmount,
            string $fromCurrency,
            string $toCurrency,
            float $convertedAmount,
            float $rateUsed
        ) {
            $this->originalAmount = $originalAmount;
            $this->fromCurrency = $fromCurrency;
            $this->toCurrency = $toCurrency;
            $this->convertedAmount = $convertedAmount;
            $this->rateUsed = $rateUsed;
        }
    }