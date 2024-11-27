<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateResidentRequest extends FormRequest
{
    // Authorize the request
    public function authorize()
    {
        return true; // Adjust authorization logic as necessary
    }

    // Define validation rules
    public function rules()
    {
        return [
            'first_name' => 'sometimes|required|string|max:255',
            'last_name' => 'sometimes|required|string|max:255',
            'residency_status' => 'sometimes|required|string',
            'classification_status' => 'sometimes|required|string|in:Homeowner,Renter', // Ensure valid options
            // Add other fields and their validation rules as necessary
        ];
    }

    // Optionally, customize the error messages
    public function messages()
    {
        return [
            'first_name.required' => 'The first name is required.',
            'last_name.required' => 'The last name is required.',
            'residency_status.required' => 'The residency status is required.',
            'classification_status.required' => 'The classification status is required.',
            'classification_status.in' => 'The classification status must be either Homeowner or Renter.',
            // Add other custom messages as necessary
        ];
    }
}