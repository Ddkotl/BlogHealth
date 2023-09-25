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
            'title'=>'required|string',
            'content'=>'required|string',
            'main_image'=>'nullable|file',
            'preview_image'=>'nullable|file',
            'category_id'=>'required|integer|exists:categories,id',
            'tag_ids'=>'nullable|array',
            'tag_ids.*'=>'nullable|integer|exists:tags,id',
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>'Нужно заполнить это поле',
            'title.string'=>'Данные нужны только строчного типа',
            'content.required'=>'Нужно заполнить это поле',
            'content.string'=>'Данные нужны только строчного типа',
            'main_image.required'=>'Нужно заполнить это поле',
            'main_image.file'=>'Выберите файл',
            'preview_image.required'=>'Нужно заполнить это поле',
            'preview_image.file'=>'Выберите файл',
            'category_id.required'=>'Нужно заполнить это поле',
            'category_id.integer'=>'Id категории должно быть числом',
            'category_id.exists'=>'Id категории должен существовать в базе данных',
            'tag_ids.array'=>'Необходимо отправить массив данных',
        ];
    }

}
