<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
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
            'cate_id' => 'required',
            'status' => 'required',
            'type_hotel' => 'required|min:1|max:5',
            'starting_point' => 'required',
            'destination' => 'required',
            'schedule' => 'required',
            'child_price' => 'required',
            'adult_price' => 'required',
            'tour_code' => 'required',
            'start_day' => 'required',
            'end_day' => 'required',
        ];
    }
    public function message()
    {
        return [
            'name.required' => __('label.name_required'),
            'cate_id' => __('label.cate_required'),
            'status' => __('label.status_required'),
            'type_hotel' => __('label.hotel_required'),
            'starting_point' => __('label.starting_required'),
            'destination' => __('label.destination_required'),
            'schedule' => __('label.shecdule_required'),
            'child_price' => __('label.child_required'),
            'adult_price' => __('label.adult_required'),
            'tour_code' => __('label.tour_required'),
            'start_day' => __('label.start_required'),
            'end_day' => __('label.end_required'),
        ];
    }
}
