<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CityRequest extends FormRequest
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
        return [
            "name" => ["required", "min:2", "max:255", "string"]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Ime je obavezno polje.",
            'name.min' => "Ime mora sadrzati makar 2 karaktera",
            'name.max' => "Ime moze sadrzati najvise 255 karaktera",
            'name.string' => "Ime nije string"
        ];
    }
}
