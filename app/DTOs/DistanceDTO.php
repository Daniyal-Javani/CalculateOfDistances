<?php

namespace App\DTOs;

use Spatie\DataTransferObject\DataTransferObject;

class DistanceDTO extends DataTransferObject
{
    public int $value;

    public string $unit;
}
