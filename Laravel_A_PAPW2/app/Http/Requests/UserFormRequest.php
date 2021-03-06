<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\UserFormRequest;
use App\User;
class UserFormRequest extends FormRequest
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
            'username' => 'required|min:3|max:50',
            'apellido' => 'required|min:3|max:50',
            'password' => 'required|min:6|max:20',
            'imagen' => 'required',
            'answer' => 'required|min:3|max:100'
        ];
    }
}
