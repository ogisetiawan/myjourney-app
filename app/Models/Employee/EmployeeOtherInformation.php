<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeOtherInformation extends Model
{
    use HasFactory;

    protected $table = 'employee_other_information';
    protected $primaryKey = 'id_employee_other_information';
    protected $fillable = [
        'marital_status',
        'marriage_date',
        'religion',
        'blood_type',
        'last_health_check_date',
        'current_health_status',
        'height',
        'weight',
        'id_employee',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'id_employee');
    }
}
