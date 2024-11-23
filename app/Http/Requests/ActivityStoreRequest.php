<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'type' => 'required|in:Call,Meeting,Email,Interview',
            'date' => 'required|date',
            'hours_start' => 'required',
            'hours_end' => 'required',
            'location' => 'nullable|string|max:255',
            'description' => 'required|string|max:500',
            'url' => 'nullable|max:255',
            'user_id' => 'required|exists:users,id'
        ];
    }
}
