<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderTourRequest extends FormRequest
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
            'fullname' => 'required|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required|max:255',
        ];
    }

    public function message()
    {
        return [
            'fullname.required' => __('label.user.fullname_required'),
            'phone.required' => __('label.booktour.phone_required'),
            'email.required' => __('label.user.email_required'),
            'address.required' => __('label.booktour.address_required'),
        ];
    }
}
