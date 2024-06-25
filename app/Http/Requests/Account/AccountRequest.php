<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'email' => 'required|email|unique:accounts,email',
            'password' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'email.unique' => 'Email đã tồn tại',
            'email.email' => 'Email không hợp lệ',
            'email.required' => 'Vui lòng nhập email',
            'password.required' => 'Vui lòng nhập password',
        ];
    }
}
