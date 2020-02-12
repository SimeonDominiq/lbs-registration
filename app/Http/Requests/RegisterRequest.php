<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'firstname' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email',
            'country_of_residence' => 'required',
            'date_of_birth' => 'required',
            'company' => 'required|string',
            'years_working_experience' => 'required',
            'university_grade' => 'required',
            'english_grade' => 'required',
            'mathematics_grade' => 'required',
            'english_test_year' => 'required',
            'test_score' => 'required',
            'agree' => 'required'
        ];
    }
}
