<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [

            'title'=> "required|string",
            'pages'=> "required|numeric",
            'author'=> "required",
            'year'=> "numeric",
            'image'=> "required|mimes:png",
        ];
    }

    public function messages()
    {
        return[

          'title.required'=> 'Titolo obbligatorio',  
          'pages.required'=> 'Inserisci il numero di pagine',
          'author.required'=> "Inserisci l'autore",
        ];
        

    }
}
