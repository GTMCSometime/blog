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
            'role' => 'required|integer',
        ];
    }

    public function messages() {
        return [
            'name.required' => "Это поле необходимо заполнить",
            'name.string' => "Данные должны соответствовать строчному типу",
            'email.required' => "Это поле необходимо заполнить",
            'email.email' => "Введите корректный email",
            'email.unique' => "Почта занята",
            'role.required' => 'Необходимо выбрать роль пользователя',
            'role.integer' => 'Некорректный role_id',
        ];
    }

}
