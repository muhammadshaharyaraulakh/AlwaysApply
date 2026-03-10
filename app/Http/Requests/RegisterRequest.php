<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rules\Unique;
use Iluuminate\Fascadse\Hash;
use App\Models\User;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
         return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => [
                'required',
                'string',
                Password::min(12)
                    ->mixedCase()
                    ->numbers()   
                    ->symbols(),  
            ],
            'mobile' => ['nullable', 'string', 'regex:/^\+92\d{10}$/', 'unique:users'],
            'updates' => 'nullable|boolean',
        ];
    }
    public function messages()
    {
          return [
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already registered.',
            'password.required' => 'Password is required.',
            'mobile.regex' => 'Please enter a valid mobile number starting with +92 followed by 10 digits.',
            'mobile.unique' => 'This mobile number is already registered.',
        ];
    }
}
