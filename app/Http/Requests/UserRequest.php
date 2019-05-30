<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username' => 'required|min:3|max:255',
            'image.*' => 'image|mimes:jpg,jpeg,png|max:2048',
            'password' => 'required|min:6',
            'email' => 'required|email',
            'fullname' => 'required|max:255',
            'role' => 'required:max:3',
        ];
    }
    public function message()
    {
        return [
            'username.required' => __('label.user.username_required'),
            'image' => __('label.image_required'),
            'fullname.required' => __('label.user.fullname_required'),
            'role.required' => __('label.user.role_required'),
            'email.required' => __('label.user.email_required'),
            'password' => __('label.user.password_required'),
        ];
    }
}
