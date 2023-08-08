<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeWorkHistory extends Model
{
    use HasFactory;

    protected $table = 'employee_work_history';
    protected $primaryKey = 'id_employee_work_history';
    protected $fillable = [
        'company_name',
        'address',
        'position_held',
        'period_of_employment',
        'id_employee',
    ];
}
