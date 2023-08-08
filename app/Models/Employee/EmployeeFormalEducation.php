<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeFormalEducation extends Model
{
    use HasFactory;
    protected $table = 'employee_formal_education';
    protected $primaryKey = 'id_employee_formal_education';
    protected $fillable = [
        'education_grade',
        'institution',
        'major',
        'gpa_score',
        'id_employee',
    ];
}
