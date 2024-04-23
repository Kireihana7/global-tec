<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'last_name' => ['required', 'string', 'regex:/^[A-Z]{1,20}$/'],
            'middle_name' => ['required', 'string', 'regex:/^[A-Z]{1,20}$/'],
            'first_name' => ['required', 'string', 'regex:/^[A-Z]{1,20}$/'],
            'other_name' => ['nullable', 'string', 'regex:/^[A-Z ]{1,50}$/'],
            'countryJob' => ['required', Rule::in(['Colombia', 'Estados Unidos'])],
            'type_ID' => ['required', Rule::in(['Cédula de Ciudadanía', 'Cédula de Extranjería', 'Pasaporte', 'Permiso Especial'])],
            'personal_ID' => ['required', 'string', 'max:20', 'unique:employees'],
        ];
    }

    public function withValidator($validator)
        {
    $validator->after(function ($validator) {
        // Custom validation for email generation
        $country = $this->input('countryJob');
        $firstName = $this->input('first_name');
        $lastName = $this->input('last_name');
        $personalID = $this->input('personal_ID');

        $emailDomain = ($country === 'Colombia') ? 'global.com.co' : 'global.com.us';
        $email = strtolower($firstName . '.' . $lastName . '.' . $personalID . '@' . $emailDomain);

        // Check for existing email
        $count = Employee::where('email', $email)->count();

        if ($count > 0) {
            // Append numeric ID if email already exists
            $numericID = $count + 1;
            $email = strtolower($firstName . '.' . $lastName . '.' . $personalID . $numericID . '@' . $emailDomain);
        }

        // Assign email to input
        $this->merge(['email' => $email]);
    });
        }

}
