<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class employeeformrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
          //  'password' => ['required', 'string', 'min:8', 'confirmed'],
            'age' => ['required', 'integer', 'max:255'],
            'dob' => ['required', 'string', 'max:255'],
            'employee_id' => ['required', 'string', 'max:255'],
            'stage' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'education' => ['required', 'string', 'max:255'],
            'degree' => ['required', 'string', 'max:255'],
            'experience' => ['required', 'string', 'max:255']

        ];
    }
}
