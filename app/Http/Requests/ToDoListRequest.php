<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ToDoListRequest extends FormRequest
{
    public function rules()
    {
        return [
            'to_do_lists.title' => 'required|string|max:100',
            'to_do_lists.body' => 'required|string|max:4000',
        ];
    }
}