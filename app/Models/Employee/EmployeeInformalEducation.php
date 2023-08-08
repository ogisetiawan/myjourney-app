<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeInformalEducation extends Model
{
    use HasFactory;

    protected $table = 'employee_informal_education';
    protected $primaryKey = 'id_employee_informal_education';
    protected $fillable = [
        'course_training',
        'institution',
        'start_date',
        'end_date',
        'duration_type',
        'duration',
        'expired_date',
        'course_fee',
        'education_description',
        'have_certificate',
        'attachment',
        'id_employee',
    ];

    protected $casts = [
        'have_certificate' => 'boolean',
    ];
}
