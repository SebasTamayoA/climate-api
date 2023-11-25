<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WeatherRequestUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'location_name' => 'string',
            'recorded_at' => 'date',
            'temperature' => 'numeric',
            'humidity' => 'numeric',
            'wind_speed' => 'numeric',
            'weather_description' => 'string',
            'pressure' => 'numeric',
            'uv_index' => 'numeric',
            'forecast' => 'string',
            'latitude' => 'numeric',
            'longitude' => 'numeric',
        ];
    }
}
