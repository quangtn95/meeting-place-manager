<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SearchRequest extends Request
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
            'txtnum'    => 'required',
            'txtstart'   => 'required',
            'txtend'     => 'required'
        ];
    }

    public function messages() {
        return [
            'txtnum.required'    => "Please Enter Number People",
            'txtstart.required'   => "Please Enter Time Start",
            'txtend.required'     => "Please Enter Time End"
        ];
    }
}
