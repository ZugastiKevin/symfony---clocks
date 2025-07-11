<?php
    namespace App\DTO;

    class PercentageOutputDto
    {
        public function __construct(
            public float $result,
        ){}
    }