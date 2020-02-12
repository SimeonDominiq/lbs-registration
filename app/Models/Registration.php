<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'title',
        'firstname',
        'surname',
        'email',
        'country_of_residence',
        'date_of_birth',
        'company',
        'years_working_experience',
        'university_grade',
        'education_test_grade',
        'english_grade',
        'mathematics_grade',
        'english_test_year',
        'test_score'
    ];
}
