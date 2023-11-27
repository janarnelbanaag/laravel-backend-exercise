<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        if(request()->isMethod('post')) {
            return [
                'name' => 'required|string|max:258',
                'email' => 'required|string',
                'password' => 'required|string',
            ];
        } else {
            return [
                'name' => 'required|string|max:258',
                'email' => 'required|string',
                'password' => 'required|string',
            ];
        }
    }

    public function messages(): array
    {
        if(request()->isMethod('post')) {
            return [
                'name' => 'Name is required',
                'email' => 'Email is required',
                'password' => 'password is required'
            ];
        } else {
            return [
                'name' => 'Name is required',
                'email' => 'Email is required',
                'password' => 'password is required'
            ];
        }
    }
}
