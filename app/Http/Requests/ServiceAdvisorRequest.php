<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceAdvisorRequest extends FormRequest
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
            'name'=> 'required',
            'email'=> 'required',
            'phone_number'=> 'required',
            'bank'=> 'required',
            'topic_interest'=> 'required',
            'date'=> 'required',
            'time'=> 'required',
            'post_code'=> 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('general.khidmat_name_required'),
            'email.required' => trans('general.khidmat_email_required'),
            'phone_number.required' => trans('general.khidmat_phone_required'),
            'bank.required' => trans('general.khidmat_bank_required'),
            'topic_interest.required' => trans('general.khidmat_topic_interest_required'),
            'date.required' => trans('general.khidmat_date_required'),
            'time.required' => trans('general.khidmat_time_interest_required'),
            'post_code.required' => trans('general.post_code_required'),
        ];
    }
}
