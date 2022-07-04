<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ToDoListRequest extends FormRequest
{
    public function rules()
    {
        return [
            'todolists.title' => 'required|string|max:100',
            'todolists.body' => 'required|string|max:4000',
        ];
    }
}