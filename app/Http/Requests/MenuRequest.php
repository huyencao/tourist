<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
            'name' => 'required|min:3',
            'parent_id' => 'required',
            'link' => 'required',
            'location' => 'required',
            'status' => 'required',
        ];
    }
    public function message()
    {
        return [
            'name.required' => __('label.name_required'),
            'parent_id' => __('label.parent_required'),
            'status' => __('label.status_required'),
            'link' => __('label.link_required'),
            'location' => __('label.location_required'),
        ];
    }
}
