<?php

namespace Database\Factories\Employee;

use App\Models\Employee\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee\EmployeeStatus>
 */
class EmployeeStatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'employee_status' => $this->faker->randomElement(['Inactive', 'Permanent', 'Probation', 'Contract']),
            'hire_date' => $this->faker->date,
            'original_hire_date' => $this->faker->date,
            'continuous_service_date' => $this->faker->date,
            'confirmation_date' => $this->faker->optional()->date,
            'years_of_service' => $this->faker->randomNumber(2),
            'end_of_probation' => $this->faker->optional()->date,
            'last_working_day' => $this->faker->optional()->date,
            'reason_for_leaving' => $this->faker->optional()->text,
            'retirement_date' => $this->faker->optional()->date,
            'extended_retirement_date' => $this->faker->optional()->date,
            'id_employee' => Employee::factory()
        ];
    }
}
