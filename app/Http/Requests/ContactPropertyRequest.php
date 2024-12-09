<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactPropertyRequest extends FormRequest
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
            'firstName' => ['required', 'string' , 'min:3'],
            'lastName' => ['required', 'string' , 'min:3'],
            'phone' => ['required', 'numeric' , 'min:8'],
            'email' => ['required', 'email'],
            'message' => ['required', 'min:5'],
        ];
    }
}
