<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUserUpdateFormRequest extends FormRequest
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
        $idUser = auth()->user()->id;

        return [
            'name'      => "required|min:3|max:100|unique:users,name,{$idUser},id",
            'password'  => 'max:15',
            'image'     => 'image'
        ];
    }
}
