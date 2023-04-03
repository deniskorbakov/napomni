<?php

namespace App\Http\Requests\Reminder;

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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:20',
            'content' => 'required|string|min:3|max:100',
            'value' => 'required',
            'date' => 'required',
            'time' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Название Записи',
            'content' => 'Текст Записи',
            'time' => 'Время уведомления',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Название записи должно быть заполнено',
            'content.required' => 'Текст записи должно быть заполнено',
            'time.required' => 'Уведомление записи должно быть заполнено',
            'name.min' => 'Название записи должно быть минимум 3 символа',
            'content.min' => 'Текст записи должно быть минимум 3 символа',
            'name.max' => 'Название записи должно быть максимум 20 символов',
            'content.max' => 'Текст записи должно быть минимум 100 символов',
        ];
    }
}
