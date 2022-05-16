<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateUserDetail extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'religion' => 'nullable|string|min:1|max:200',
            'faculity' => 'nullable|string|min:1|max:200',
            'study_program' => 'nullable|string|min:1|max:200',
            'generation' => 'nullable|string|min:1|max:200',
            'address' => 'nullable|string',
            'user_id'  => 'nullable|numeric',
            'role_id' => 'nullable|numeric',
            'birthdate' => 'nullable|string|min:1|max:200',
            'birthplace' => 'nullable|string|min:1|max:200',
            'instagram' => 'nullable|string|min:1|max:200',
            'phone' => 'nullable|string|min:1|max:200'
        ];
    }
}
