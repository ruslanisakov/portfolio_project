<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'login'            => 'required|min:5|max:50',
            'email'            => 'required|email',
            'password'         => 'required',
            'confirm_password' => 'required',
            'captcha'          => 'required',
        ];
    }

    public  function attributes()
    {
        return [
            'login' => 'Your Login'
        ];
    }

    public  function messages()
    {
        return [
            'login.required' => 'Поле login является обязательным'
        ];
    }
}
