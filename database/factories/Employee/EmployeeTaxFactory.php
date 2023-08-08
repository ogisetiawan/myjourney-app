<?php

namespace Database\Factories\Employee;

use App\Models\Employee\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee\EmployeeTax>
 */
class EmployeeTaxFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tax_id' => $this->faker->optional()->word,
            'tax_status' => $this->faker->optional()->word,
            'number_of_dependents' => $this->faker->optional()->numberBetween(0, 10),
            'id_employee' => Employee::factory()
        ];
    }
}
