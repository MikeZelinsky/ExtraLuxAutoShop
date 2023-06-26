<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'brand' => 'required',
            'price' => 'required',
            'releaseDate' => 'required|integer',
            'color' => 'required',
            'mileage' => 'required|integer',
            'file' => 'required'
        ];
    }
    public function messages()
    {
        return[
            'brand.required' => 'Введите марку авто',
            'price.required' => 'Введите цену авто',
            'releaseDate.required' => 'Введите дату выпуска авто',
            'releaseDate.integer' => 'Тип данных - число',
            'color.required' => 'Введите цвет авто',
            'mileage.required' => 'Введите пробег авто',
            'mileage.integer' => 'Тип данных - число',
            'file.required' => 'Добавьте фото авто',
            ];
    }

}