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
            'complete_name' => 'required|string|max:255', // Add this line
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'sex' => 'nullable|string|in:Male,Female,Prefer not to say', // Optional field
            'cv' => 'required|mimes:pdf,doc,docx|max:10240', // Validate CV upload
        ];
    }
}
