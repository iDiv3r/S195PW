<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestLibros extends FormRequest
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
            'isbn'=>'required|integer|min_digits:13',
            'titulo'=>'required|string|max:150',
            'pags'=>'required|gte:1',
            'year'=>'required|size:4|gte:1000|lte:2024',   
            'mail'=>'required|email|',
        ];
    }
}
