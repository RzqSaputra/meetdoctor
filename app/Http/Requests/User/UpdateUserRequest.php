<?php

namespace App\Http\Requests\User;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

//this rule only update request
use illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
         //create middleware from karnel at here
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
            'name' =>  [
                'required', 'string', 'max:255'
            ],  
            'email' =>  [
                'required', 'email', 'max:255', Rule::unique('user')->ignore($this->user),
                //rule unique only work for other record id
            ],
            'password' =>  [
                'min:8', 'string', 'max:255', 'mixedCase'
            ],

            //ada
        ];
    }
}
