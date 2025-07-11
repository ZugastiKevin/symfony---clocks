<?php
    namespace App\Service;

    class Date
    {
        public function messageGenerator($theDate): string 
        {
            $message = [
                "salue on est la",
                "salue on est demain",
                "salue on est apres demain",
            ];

            $index = 0;

            if ($theDate == date("2025-07-11")) {
                $index = 0;
            } elseif ($theDate == date("2025-07-12")) {
                $index = 1;
            } elseif ($theDate == date("2025-07-13")) {
                $index = 2;
            }
            return $message[$index];
        }
    }