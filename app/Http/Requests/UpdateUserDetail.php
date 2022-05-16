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
            'religion' => 'nullable|string',
            'faculity' => 'nullable|string',
            'study_program' => 'nullable|string',
            'generation' => 'nullable|string',
            'address' => 'nullable|string',
            'user_id'  => 'nullable|numeric',
            'role_id' => 'nullable|numeric',
            'birthdate' => 'nullable|string',
            'birthplace' => 'nullable|string'
        ];
    }
}
