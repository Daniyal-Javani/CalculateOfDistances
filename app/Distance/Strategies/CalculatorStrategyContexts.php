<?php

namespace App\Distance\Strategies;

use Exception;

class CalculatorStrategyContexts
{
    private $strategy;

    public function __construct(string $operator)
    {
        $className = __NAMESPACE__ . '\\' . ucfirst($operator) . 'CalculatorStrategy';

        if (class_exists($className)) {
            $this->strategy = new $className();
        } else {
            throw new Exception($operator . ' response is not supported');
        }
    }

    public function calculate(array $distances)
    {
        return round($this->strategy->calculate($distances), 4);
    }
}
