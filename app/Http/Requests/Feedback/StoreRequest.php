<?php

namespace App\Http\Requests\Feedback;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|min:3|max:50',
            'content' => 'required|string|min:3|max:300',
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Название Записи',
            'content' => 'Текст Записи',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Название записи должно быть заполнено',
            'content.required' => 'Текст записи должно быть заполнено',
            'title.min' => 'Название записи должно быть минимум 3 символа',
            'content.min' => 'Текст записи должно быть минимум 3 символа',
            'title.max' => 'Название записи должно быть максимум 50 символов',
            'content.max' => 'Текст записи должно быть минимум 300 символов',
        ];
    }
}
