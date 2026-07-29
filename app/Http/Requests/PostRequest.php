<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'excerpt' => ['required'],
            'body' => ['required'],
            'html' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
