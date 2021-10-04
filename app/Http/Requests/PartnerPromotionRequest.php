<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerPromotionRequest extends FormRequest
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
            'slider' => 'mimes:png,jpeg,gif'
        ];
    }

    public function messages()
    {
        return [
            'slider.mimes' => 'Only png,jpeg,gif type allowed'
        ];
    }
}
