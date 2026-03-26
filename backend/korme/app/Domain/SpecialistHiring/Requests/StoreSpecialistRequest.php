<?php

namespace App\Domain\SpecialistHiring\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreSpecialistRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:specialists,email',
            'specialty' => 'required|string|max:100',
            'bio' => 'nullable|string|max:1000',
            'phone' => 'nullable|string|max:20'
        ];
    }
}
