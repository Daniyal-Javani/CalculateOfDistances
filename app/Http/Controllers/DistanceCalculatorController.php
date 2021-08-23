<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalculateDistancesRequest;
use App\Services\CalculatorService;

class DistanceCalculatorController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param CalculateDistancesRequest $request
     * @return void
     * @return \Illuminate\Http\Response
     */
    public function __invoke(
        CalculateDistancesRequest $request,
        CalculatorService $calculatorService
    ) {
        $calculateUnitDTO = $request->toDTO();
        $value = $calculatorService->handle($calculateUnitDTO);

        return response()->json([
            'data' => [
                'value' => $value,
                'unit' => $calculateUnitDTO->responseUnit,
            ]
        ]);
    }
}
