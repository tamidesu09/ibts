<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationsCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Allow all users to make this request
    }

    public function rules()
    {
        return [
            'job_id' => 'required',
            'phone_number' => 'required|string|max:15',
            'sex' => 'nullable|string|in:Male,Female,Prefer not to say', 
            'cv' => 'required|mimes:pdf|max:10240' 
        ];
    }
}
