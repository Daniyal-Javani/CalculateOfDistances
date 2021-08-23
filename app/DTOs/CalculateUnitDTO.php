<?php

namespace App\DTOs;

use App\DTOs\DistanceDTO;
use Spatie\DataTransferObject\DataTransferObject;

class CalculateUnitDTO extends DataTransferObject
{
    #[CastWith(DistanceDTO::class)]
    public array $distances;

    public string $operation;

    public string $responseUnit;
}
