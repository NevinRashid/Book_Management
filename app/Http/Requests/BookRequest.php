<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title'       => ['required','string','max:255'],
            'cover'       => ['required','mimes:jpg,jpeg,png','max:2048'],
            'published_at'=> ['required','max:255'],
            'author_id'   =>['required','exists:authors,id'],
            'category_id' =>['required','exists:categories,id'],
            'language_id' =>['required','exists:languages,id']
        ];
    }   
    public function messages(): array
    {
        return [
            'title.required' => 'A title is required',
            'published_at.required' => 'A Publication date is required',
        ];
    }
}
