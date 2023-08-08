<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeStatus extends Model
{
    use HasFactory;

    protected $table = 'employee_status';
    protected $primaryKey = 'id_employee_status';
    protected $fillable = [
        'employee_status',
        'hire_date',
        'original_hire_date',
        'continuous_service_date',
        'confirmation_date',
        'years_of_service',
        'end_of_probation',
        'last_working_day',
        'reason_for_leaving',
        'retirement_date',
        'extended_retirement_date',
        'id_employee',
    ];

    protected $dates = ['deleted_at'];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'id_employee');
    }
}
