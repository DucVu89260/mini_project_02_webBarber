<?php

namespace App\Http\Requests\Stylist;

use App\Models\Stylist;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DestroyRequest extends FormRequest
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
            'stylist' =>[
                'required',
                Rule::exists(Stylist::class,'id'),
            ]
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'stylist' => $this->route('stylist'),
        ]);
    }
}
