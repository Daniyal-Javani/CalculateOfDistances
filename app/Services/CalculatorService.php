<?php

namespace App\Services;

use App\Distance\Strategies\CalculatorStrategyContexts;
use App\DTOs\CalculateUnitDTO;
use App\Models\Unit;

class CalculatorService
{
    private $responserConversionFactor;

    public function handle(CalculateUnitDTO $calculateUnitDTO)
    {
        $distances = [];
        $responseUnit = $calculateUnitDTO->responseUnit;

        $this->responserConversionFactor = Unit::where('name', $responseUnit)
            ->first()
            ->conversion_factor;

        foreach ($calculateUnitDTO->distances as $distance) {
            $distances[] = $this->convert($distance);
        }

        $calculatorStrategyContext = new CalculatorStrategyContexts($calculateUnitDTO->operation);
        $result = $calculatorStrategyContext->calculate($distances);

        return round($result, 4);
    }

    private function convert(array $distance)
    {
        $conversionFactor = Unit::where('name', $distance['unit'])
            ->first()
            ->conversion_factor;

        return ($distance['value'] * $conversionFactor) /
            $this->responserConversionFactor;
    }
}
