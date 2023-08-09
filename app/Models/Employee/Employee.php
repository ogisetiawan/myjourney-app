<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'employee';
    protected $primaryKey = 'id_employee';
    protected $fillable = [
        'code_employee',
        'salutation',
        'name',
        'nick_name',
        'photo',
        'gender',
        'birth_date',
        'age',
        'birth_place',
        'country_of_birth',
        'nationality',
        'race',
        'internal_order_SAP',
        'status',
        'created_by',
        'updated_by',
    ];
    protected $timeStamps = 'Y-m-d H:i:s';
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->hasOne(\App\Models\User::class, 'id_employee');
    }

    public function employeeContact()
    {
        return $this->hasOne(EmployeeContact::class, 'id_employee');
    }

    public function employeeOtherInformation()
    {
        return $this->hasOne(EmployeeOtherInformation::class, 'id_employee');
    }

    public function employeeStatus()
    {
        return $this->hasOne(EmployeeStatus::class, 'id_employee');
    }
    public function employeeJobHeader()
    {
        return $this->hasOne(EmployeeJobHeader::class, 'id_employee');
    }
    public function employeeJobDetail()
    {
        return $this->hasOne(EmployeeJobDetail::class, 'id_employee', 'id_employee');
    }
    public function employeeFormalEducation()
    {
        return $this->hasOne(EmployeeFormalEducation::class, 'id_employee');
    }
    public function employeeinformalEducation()
    {
        return $this->hasOne(EmployeeInformalEducation::class, 'id_employee');
    }
    public function employeeWorkHistory()
    {
        return $this->hasOne(EmployeeWorkHistory::class, 'id_employee');
    }
    public function employeeFamilyInformation()
    {
        return $this->hasOne(EmployeeFamilyInformation::class, 'id_employee');
    }
    public function employeeLegalIdentity()
    {
        return $this->hasOne(EmployeeLegalIdentity::class, 'id_employee');
    }
    public function employeeBank()
    {
        return $this->hasOne(EmployeeBank::class, 'id_employee');
    }
    public function employeeTax()
    {
        return $this->hasOne(EmployeeTax::class, 'id_employee');
    }
    public function employeeInsurance()
    {
        return $this->hasOne(EmployeeInsurance::class, 'id_employee');
    }
}
