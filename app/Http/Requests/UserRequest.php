<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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

    /**
    *En los requests uno puede poner validaciones de los campos.
    **/
    public function rules()
    {
        return [
            //
            'name' => 'min:4|max:120|required',
            'email' => 'min:4|max:250|required|unique:users',
            'password' => 'min:4|max:120|required'
        ];
    }
}
