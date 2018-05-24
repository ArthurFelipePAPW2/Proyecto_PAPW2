<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\maodifyuser;
use App\User;
class maodifyuser extends FormRequest
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
            'pass' => 'max:6|min:20',
            'nombre' => 'min:3|max:50',
            'acerca' => 'max:140|min:0',
            'apellido' => 'min:3|max:50',
            'correo' => 'max:50|min:5',
            'pagina' => 'min:3|max:50'
        ];
    }
}
