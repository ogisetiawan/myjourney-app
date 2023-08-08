<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeJobDetail extends Model
{
    use HasFactory;
    protected $table = 'employee_job_detail';
    protected $primaryKey = 'id_employee_job_detail';
    protected $fillable = [
        'country',
        'company',
        'region',
        'state_province',
        'branch',
        'work_location',
        'division_group_vn',
        'division_code',
        'division',
        'bu_group',
        'dept_code',
        'department',
        'job_grade',
        'job_family',
        'sub_job_family',
        'job_title',
        'cost_center',
        'movement_type',
        'movement_date',
        'career_level',
        'id_employee',
        'id_employee_job_header',
    ];

    public function employeeJobHeader()
    {
        return $this->belongsTo(EmployeeJobHeader::class, 'id_employee_job_header');
    }
}
