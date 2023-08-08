<?php

namespace Database\Factories\Employee;

use App\Models\Employee\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee\EmployeeBank>
 */
class EmployeeBankFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_of_the_bank' => $this->faker->optional()->company,
            'branch_of_the_bank' => $this->faker->optional()->city,
            'bank_account_number' => $this->faker->optional()->bankAccountNumber,
            'bank_account_holder_name' => $this->faker->optional()->name,
            'id_employee' => Employee::factory()
        ];
    }
}
