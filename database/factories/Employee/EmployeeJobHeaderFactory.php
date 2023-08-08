<?php

namespace Database\Factories\Employee;

use App\Models\Employee\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee\EmployeeJobHeader>
 */
class EmployeeJobHeaderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'employee_type' => $this->faker->randomElement(['Sales', 'Non-Sales']),
            'direct_superior' => $this->faker->name,
            'indirect_superior' => $this->faker->name,
            'salesman_code' => $this->faker->numberBetween(100, 9999),
            'id_employee' => Employee::factory()
        ];
    }
}
