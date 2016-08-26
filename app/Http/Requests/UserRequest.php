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
    public function rules()
    {
        return [
            'txtusername' => 'required|unique:users,username',
            'txtpass'     => 'required|min:8',
            'txtpassret'  => 'required|same:txtpass',
            'txtemail'    => 'required|regex:/^[a-z][a-z0-9]*(_[a-z0-9]+)*(\.[a-z0-9]+)*@[a-z0-9]([a-z0-9-][a-z0-9]+)*(\.[a-z]{2,4}){1,2}$/'
        ];
    }

    public function messages() {
        return [
            'txtusername.required' => 'Please Enter Username',
            'txtusername.unique'   => 'Username Is Exist',
            'txtpass.required'     => 'Please Enter Password',
            'txtpassret.required'  => 'Please Enter Re-Password',
            'txtpassret.same'      => 'Two Password Don\'t Match',
            'txtemail.required'    => 'Please Enter Email',
            'txtemail.regex'       => 'Email Error Syntax'
        ];
    }
}