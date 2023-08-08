<?php

namespace Database\Factories\Employee;

use App\Models\Employee\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee\EmployeeLegalIdentity>
 */
class EmployeeLegalIdentityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'emergency_contact_person' => $this->faker->optional()->name,
            'relationship_type' => $this->faker->optional()->randomDigit,
            'phone_number' => $this->faker->optional()->phoneNumber,
            'address' => $this->faker->optional()->address,
            'id_number' => $this->faker->optional()->word,
            'date_of_birth' => $this->faker->optional()->date,
            'age' => $this->faker->optional()->numberBetween(18, 80),
            'gender' => $this->faker->optional()->randomElement(['Male', 'Female']),
            'marital_status' => $this->faker->optional()->randomElement(['Single', 'Married']),
            'job_occupation' => $this->faker->optional()->word,
            'id_employee' => Employee::factory()
        ];
    }
}
