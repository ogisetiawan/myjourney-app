<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeInsurance extends Model
{
    use HasFactory;

    protected $table = 'employee_insurance';
    protected $primaryKey = 'id_employee_insurance';
    protected $fillable = [
        'benefit_in_kind',
        'social_security_by_local_government_id',
        'epf_number',
        'company_health_medical_insurance_id',
        'insurance_name',
        'nbi_number',
        'nbi_validity',
        'id_employee',
    ];

    protected $dates = ['nbi_validity'];
}
