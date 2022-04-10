<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreActivity extends FormRequest
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
            'activity'      => 'required|min:1|max:100',
            'activity_role' => 'required|min:1|max:100',
            'held_at'       => 'required|date',
            'description'   => 'required|min:1|max:1000'
        ];
    }
}
