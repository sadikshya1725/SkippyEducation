<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentForm extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'current_address',
        'email',
        'contact_number',
        'country_of_citizenship',
        'visa_status',
        'visa_status_other',
        'highest_education_level',
        'enrolled_course',
        'purpose_of_visit',
        'special_conditions',
    ];
}
