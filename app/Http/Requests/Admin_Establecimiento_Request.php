<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Admin_Establecimiento_Request extends FormRequest
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
                'empresa'=>'required',
                'representante'=>'required',
                'email'=>'required|unique:empresa,email',
                'nit'=>'required',
                'usuario'=>'required',
                'password'=>'required|string|min:8|confirmed',
                'tipo'=>'required'
        ];
    }
}
