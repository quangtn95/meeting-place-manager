<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MeetingRequest extends Request
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
            'txtname'    => 'required:meetings,name',
            'txtstart'   => 'required:meetings,time_start',
            'txtend'     => 'required:meetings,time_end'
        ];
    }

    public function messages() {
        return [
            'txtname.required'    => "Please Enter Meeting Title",
            'txtstart.required'   => "Please Enter Time Start",
            'txtend.required'     => "Please Enter Time End"
        ];
    }
}
