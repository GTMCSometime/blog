<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|integer|exists:categories,id',
            'preview_image' => 'nullable|file',
            'main_image' => 'nullable|file',
            'tag_ids[]' => 'nullable|integer|array',
            'tag_ids.*' => 'nullable|exists:tags,id',
        ];
    }

    public function messages() {
        return [
            'title.required' => "Это поле необходимо заполнить",
            'title.string' => "Данные должны соответствовать строчному типу",
            'content.required' => "Это поле необходимо заполнить",
            'content.string' => "Данные должны соответствовать строчному типу",
            'category_id.required' => "Необходимо выбрать категорию",
            'category_id.integer' => "Id категории должен соответствовать существующему или не быть пустым",
            'preview_image.required' => "Добавьте фото",
            'preview_image.file' => "Данные не соответствуют типу: фото",
            'main_image.required' => "Добавьте фото",
            'main_image.file' => "Данные не соответствуют типу: фото",
            'tag_ids.array' => "Необходимо отправить массив данных",
        ];
    }
}
