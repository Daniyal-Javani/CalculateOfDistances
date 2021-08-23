<?php

namespace App\Services;

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

        $sum = 0;
        foreach ($distances as $distance) {
            $sum += $distance;
        }

        return round($sum, 4);
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
