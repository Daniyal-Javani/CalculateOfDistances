<?php

namespace App\Distance\Strategies;

use App\Distance\Strategies\CalculatorStrategyInterface;

class SubCalculatorStrategy implements CalculatorStrategyInterface
{
    public function calculate(array $distances)
    {
        $sub = array_shift($distances);
        foreach ($distances as $distance) {
            $sub -= $distance;
        }

        return $sub;
    }
}