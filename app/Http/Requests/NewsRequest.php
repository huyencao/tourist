<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'name' => 'required|min:5|max:255',
            'status' => 'required',
            'cate_id' => 'required',
        ];
    }

    public function message()
    {
        return [
            'name.required' => __('label.name_required'),
            'status' => __('label.status_required'),
            'cate_id' => __('label.cate_required'),
        ];
    }
}
