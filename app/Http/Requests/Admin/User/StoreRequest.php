<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ];
    }

    public function messages() {
        return [
            'name.required' => "Это поле необходимо заполнить",
            'name.string' => "Данные должны соответствовать строчному типу",
            'email.required' => "Это поле необходимо заполнить",
            'email.email' => "Введите корректный email",
            'password.required' => "Необходимо ввести пароль",
            'password.string' => "Пароль должен быть корректным",
            'email.unique' => "Почта занята",
        ];
    }

}
