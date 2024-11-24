<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobsUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

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
