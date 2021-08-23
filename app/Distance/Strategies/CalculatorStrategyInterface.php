<?php

namespace App\Distance\Strategies;

interface CalculatorStrategyInterface
{
    public function calculate(array $distances);
}