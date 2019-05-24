<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckinRequest extends FormRequest
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
            'room'        => 'required',
            'id_number' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'check_in' => 'required',
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'room.required' => 'Room is required!',
            'id_number.required' => 'ID Number is required!',
            'first_name.required' => 'First Name is required!',
            'last_name.required' => 'Last Name is required!',
            'check_in.required' => 'Check in Date and Time is required!'
        ];
    }
}
