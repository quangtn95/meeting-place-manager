<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RoomRequest extends Request
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
            'txtname' => 'required|unique:rooms,name',
            'image'   => 'required:rooms,image'
        ];
    }

    public function messages() {
        return [
            'txtname.required' => "Please Enter Room Name",
            'txtname.unique'   => "This Room Name Is Exist",
            'image.required'   => "Please Choose Image"
        ];
    }
}
