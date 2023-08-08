<?php

namespace Database\Factories\Employee;

use App\Models\Employee\EmployeeContact;
use App\Models\Employee\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee\EmployeeContact>
 */
class EmployeeContactFactory extends Factory
{
    protected $model = EmployeeContact::class;

    public function definition()
    {
        return [
            'employee_mobile_number' => $this->faker->phoneNumber,
            'employee_mobile_number_2' => $this->faker->phoneNumber,
            'email_address_office' => $this->faker->companyEmail,
            'email_address_personal' => $this->faker->email,
            'office_phone_number' => $this->faker->phoneNumber,
            'social_media_accounts' => $this->faker->userName,
            'permanent_address_identity_card' => $this->faker->address,
            'address_residence' => $this->faker->address,
            // 'id_employee' => function () {
            //     // Menggunakan factory untuk Employee untuk mengisi kolom 'id_employee'
            //     return \App\Models\Employee\Employee::factory()->create()->id_employee;
            // },
            // 'id_employee' => Employee::pluck('id_employee')[$this->faker->numberBetween(1,Employee::count()-1)],
            // 'id_employee' => $this->faker->unique(true)->numberBetween(1, 10),
            // 'id_employee' => function () {
            //     return EmployeeContact::factory()->count(1)->create(['id_employee' => $this->faker->unique(true)->numberBetween(1, 10)]);
            // },
            'id_employee' => Employee::factory()
        ];
    }
}
