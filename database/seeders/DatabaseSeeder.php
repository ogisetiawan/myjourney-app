<?php

namespace Database\Seeders;

use App\Models\Employee\Employee;
use App\Models\Employee\EmployeeBank;
use App\Models\Employee\EmployeeContact;
use App\Models\Employee\EmployeeFamilyInformation;
use App\Models\Employee\EmployeeFormalEducation;
use App\Models\Employee\EmployeeInformalEducation;
use App\Models\Employee\EmployeeInsurance;
use App\Models\Employee\EmployeeJobDetail;
use App\Models\Employee\EmployeeOtherInformation;
use App\Models\Employee\EmployeeStatus;
use App\Models\Employee\EmployeeJobHeader;
use App\Models\Employee\EmployeeLegalIdentity;
use App\Models\Employee\EmployeeTax;
use App\Models\Employee\EmployeeWorkHistory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Employee::factory()
        ->count(10)
        ->has(EmployeeContact::factory())
        ->has(EmployeeOtherInformation::factory())
        ->has(EmployeeStatus::factory())
        ->has(EmployeeJobHeader::factory())
        ->has(EmployeeJobDetail::factory())
        ->has(EmployeeFormalEducation::factory())
        ->has(EmployeeInformalEducation::factory())
        ->has(EmployeeWorkHistory::factory())
        ->has(EmployeeFamilyInformation::factory())
        ->has(EmployeeLegalIdentity::factory())
        ->has(EmployeeBank::factory())
        ->has(EmployeeTax::factory())
        ->has(EmployeeInsurance::factory())
        ->create();
    }
}
