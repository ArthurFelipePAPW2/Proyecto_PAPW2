<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reviewFormRequest extends FormRequest
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
            'titulo-comentario' => 'required|max:50|min:5',
            'comentario-texto' => 'required|max:140|min:10'
        ];
    }
}
