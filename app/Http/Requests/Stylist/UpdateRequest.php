<?php

namespace App\Http\Requests\Stylist;

use App\Models\Stylist;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
                'string',
                'min:3',
                'max:20',
            ],
            'phone' => [
                'string',
                'min:10',
                'max:10',
                Rule::unique(Stylist::class)->ignore($this->stylist),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Stylist must have a name',
            'name.string' => 'Stylist name contains only characters',

            'phone.required' => 'Phone number is require',
            'phone.string' => 'Phone number contains only numbers',
            'phone.min:10' => 'Phone number must have 10 numbers',
            'phone.max:10' => 'Phone number must have 10 numbers',

            'birth_date.required' => 'Stylist must have a birth date',

            'address_province.required' => 'Stylist must have a province',
        ];
    }
}
