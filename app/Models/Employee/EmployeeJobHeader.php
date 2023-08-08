<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeJobHeader extends Model
{
    use HasFactory;
    
    protected $table = 'employee_job_header';
    protected $primaryKey = 'id_employee_job_header';
    protected $fillable = [
        'employee_type',
        'direct_superior',
        'indirect_superior',
        'salesman_code',
        'id_employee',
    ];

    public function employeeJobDetail()
    {
        return $this->hasMany(EmployeeJobDetail::class, 'id_employee_job_header');
    }
}
