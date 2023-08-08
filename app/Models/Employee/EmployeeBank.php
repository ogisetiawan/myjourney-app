<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeBank extends Model
{
    use HasFactory;

    protected $table = 'employee_bank';
    protected $primaryKey = 'id_employee_bank';
    protected $fillable = [
        'name_of_the_bank',
        'branch_of_the_bank',
        'bank_account_number',
        'bank_account_holder_name',
        'id_employee',
    ];
}
