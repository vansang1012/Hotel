<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
        return ['name' => 'required',
            'birthday' => 'required',
            'phone' => 'required|min:9|max:11'

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Ten Bat Buoc phai nhap',
            'birthday.required' => 'Birth day bat buoc phai co',
            'phone.required' => 'Truong nay bat buoc phai co',
            'phone.min' => 'Phone co it nhat 9 so',
            'phone.max' => 'phone nhieu nhat 11 so'
        ];
    }
}
