<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobsCreateRequest extends FormRequest
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
            'title' => ['required', 'max:255'],
            'type' => ['required', 'in:Full-time,Part-time,Contractual'],
            'description' => ['required', 'max:10000'],
            'hours_start'=> ['required'],
            'hours_end'=> ['required'],
            'requirements' => ['required']
        ];  
    }
}
