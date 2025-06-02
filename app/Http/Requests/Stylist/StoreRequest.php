<?php

namespace App\Http\Requests\Stylist;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => [
                'required',
                'string',
                'min:3',
                'max:20',
            ],
            'phone' => [
                'required',
                'string',
                'min:10',
                'max:10',
                'unique:stylists,phone',
            ],
            'birth_date' => [
                'required',
            ],
            'address_province' => [
                'required',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Stylist must have a name',
            'name.string' => 'Stylist name contains only characters',
            'name.min:3' => 'Stylist name must have at least 3 characters',
            'name.max:20' => 'Stylist name must have at most 20 characters',

            'phone.required' => 'Phone number is require',
            'phone.string' => 'Phone number contains only numbers',
            'phone.min:10' => 'Phone number must have 10 numbers',
            'phone.max:10' => 'Phone number must have 10 numbers',

            'birth_date.required' => 'Stylist must have a birth date',

            'address_province.required' => 'Stylist must have a province',
        ];
    }
}
