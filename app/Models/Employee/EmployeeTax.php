<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeTax extends Model
{
    use HasFactory;
    protected $table = 'employee_tax';
    protected $primaryKey = 'id_employee_tax';
    protected $fillable = [
        'tax_id',
        'tax_status',
        'number_of_dependents',
        'id_employee',
    ];
}
