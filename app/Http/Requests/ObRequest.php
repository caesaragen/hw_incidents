<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObRequest extends FormRequest
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
            'ob_number' => 'bail|required|string|max:25',
            'reporting_name' => 'nullable|string|max:25',
            'id_number' => 'nullable|string|max:25',
            'incident_type' => 'required|exists:incident_types,id', 
            'name_of_affected' => 'required|string|max:25',
            'narrative' => 'nullable|string',
            'date_of_incident' => 'required|date',
        ];
    }

     /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'ob_number.required' => 'The OB number field is required.',
            'ob_number.max' => 'The OB number field must not exceed 25 characters.',
            'reporting_name.max' => 'The reporting name field must not exceed 25 characters.',
            'id_number.max' => 'The ID number field must not exceed 25 characters.',
            'incident_type.required' => 'The incident type field is required.',
            'incident_type.exists' => 'The selected incident type is invalid.',
            'name_of_affected.required' => 'The name of affected field is required.',
            'name_of_affected.max' => 'The name of affected field must not exceed 25 characters.',
            'user_id.required' => 'The user ID field is required.',
        ];
    }
}
