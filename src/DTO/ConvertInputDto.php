<?php
    namespace App\DTO;

    class ConvertInputDto
    {
        public float $devise;
        public string $from;
        public string $to;

        public function __construct(float $devise, string $from, string $to)
        {
            $this->devise = $devise;
            $this->from = strtoupper($from);
            $this->to = strtoupper($to);
        }
    }