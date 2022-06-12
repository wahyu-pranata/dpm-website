<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubmission extends FormRequest
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
            'name' => 'required|string|min:1|max:255',
            'faculity' => 'required|string|min:1|max:200',
            'study_program' => 'required|string|min:1|max:200',
            'generation' => 'required|string|min:1|max:200',
            'submission' => 'required|string',
            'g-recaptcha-response'=>'required|recaptcha'
        ];
    }
}
