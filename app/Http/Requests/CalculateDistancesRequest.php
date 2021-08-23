<?php

namespace App\Http\Requests;

use App\DTOs\CalculateUnitDTO;
use App\Models\Unit;
use Illuminate\Foundation\Http\FormRequest;

class CalculateDistancesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $unitsName = Unit::pluck('name');
        $unitsName = $unitsName->implode(',');
        return [
            'response_unit' => 'required|in:' . $unitsName,
            'operation' => 'required|in:add,sub',
            'distances' => 'required|array|size:2',
            'distances.*.value' => 'required|numeric',
            'distances.*.unit' => 'required|in:' . $unitsName,
        ];
    }

    /**
     * Build and return DTO
     *
     * @return CalculateUnitDTO
     */
    public function toDTO(): CalculateUnitDTO
    {
        return new CalculateUnitDTO(
            distances: $this->distances,
            operation: $this->operation,
            responseUnit: $this->response_unit,
        );
    }
}
