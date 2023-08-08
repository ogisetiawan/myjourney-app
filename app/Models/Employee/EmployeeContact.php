<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmployeeContact extends Model
{
    use HasFactory;

    protected $table = 'employee_contact';
    protected $primaryKey = 'id_employee_contact';

    protected $fillable = [
        'employee_mobile_number',
        'employee_mobile_number_2',
        'email_address_office',
        'email_address_personal',
        'office_phone_number',
        'social_media_accounts',
        'permanent_address_identity_card',
        'address_residence',
        'id_employee',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'id_employee');
    }
}
