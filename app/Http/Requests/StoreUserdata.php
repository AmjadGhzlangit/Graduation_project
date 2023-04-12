<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

// This File we Put All validation Rules to the register_user form 
class StoreUserdata extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'id_number' => ['required', 'string',  'digits:10','unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults(),],
            'phone_number' => ['required', 'digits:10', 'regex:/^09/','unique:'.User::class],
        ];
    }
    public function messages()
        {
            return [
                'id_number.digits' => 'You must enter a 10-digit ID number',
                'id_number.required' => 'Please enter your ID number.',
                'phone_number.regex' => 'The phone number must start with 09.',
            ];
        }
}
