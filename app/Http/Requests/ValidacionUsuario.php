<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionUsuario extends FormRequest
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
        if ($this->route('id')) {
            return [
                'userName' => 'required|max:50|unique:users,userName,' . $this->route('id'),
                // 'nombre' => 'required|max:50',
                'email' => 'required|email|max:100|unique:users,email,' . $this->route('id'),
                'password' => 'nullable|min:5',
                're_password' => 'nullable|required_with:password|min:5|same:password',
                // 'rol_id' => 'required|array'
            ];
        } else {
            return [
                'userName' => 'required|max:50|unique:users,userName,' . $this->route('id'),
                // 'nombre' => 'required|max:50',
                'email' => 'required|email|max:100|unique:users,email,' . $this->route('id'),
                'password' => 'required|min:5',
                're_password' => 'required|min:5|same:password|required_with:password',
                // 'rol_id' => 'required|array'
            ];
        }
    }
}
