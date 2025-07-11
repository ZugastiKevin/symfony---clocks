<?php
    namespace App\DTO;

    class PercentageInputDto
    {
        public function __construct(
            public float $total,
            public float $percentage,
        ){}
    }