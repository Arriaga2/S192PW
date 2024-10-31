<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorLibros extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // cambido a true para permitir la validacon
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'isbn' => 'required|digits:13|unique:libros|regex:/^\d+$/', 
            'titulo' => 'required|string|max:150', 
            'paginas' => 'required|integer|min:1', 
            'año' => 'required|integer|digits:4|min:1000|max:' . date('Y'), 
            'email_editorial' => 'required|email' 
        ];
    }
}
