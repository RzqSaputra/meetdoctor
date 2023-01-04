<?php

namespace App\Http\Requests\Role;

use App\Models\ManagementAccess\Role;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

//this rule only at update request unique
use Illuminate\Validation\Rule;

class UpdateRoleRequest extends FormRequest
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
            'title' =>  [
                'required', 'email', 'max:255', Rule::unique('role')->ignore($this->role),
                //rule unique only work for other record id
            ],
        ];
    }
}
