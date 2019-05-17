<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
            'name' => 'required|min:3|max:255',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location' => 'required',
            'status' => 'required',
        ];
    }

    public function message()
    {
        return [
            'name.required' => __('label.name_required'),
            'image' => __('label.image_required'),
            'status' => __('label.status_required'),
            'location' => __('label.location_required'),
        ];
    }
}
