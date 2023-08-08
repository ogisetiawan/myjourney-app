<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeFamilyInformation extends Model
{
    use HasFactory;

    protected $table = 'employee_family_information';
    protected $primaryKey = 'id_employee_family_information';
    protected $fillable = [
        'emergency_contact_person',
        'relationship_type',
        'phone_number',
        'address',
        'id_number',
        'date_of_birth',
        'age',
        'gender',
        'marital_status',
        'job_occupation',
        'id_employee',
    ];
}
