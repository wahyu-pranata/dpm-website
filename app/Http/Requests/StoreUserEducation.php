<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreUserEducation extends FormRequest
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
            'level' => 'required|string|min:1|max:20',
            'institution' => 'required|string|min:1|max:50',
            'start_at' => 'required|string|min:1|max:15',
            'end_at' => 'required|string|min:1|max:15'
        ];
    }
}
