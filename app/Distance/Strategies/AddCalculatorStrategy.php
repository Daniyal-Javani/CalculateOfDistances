<?php

namespace App\Distance\Strategies;

use App\Distance\Strategies\CalculatorStrategyInterface;

class AddCalculatorStrategy implements CalculatorStrategyInterface
{
    public function calculate(array $distances)
    {
        $sum = 0;
        foreach ($distances as $distance) {
            $sum += $distance;
        }

        return $sum;
    }
}