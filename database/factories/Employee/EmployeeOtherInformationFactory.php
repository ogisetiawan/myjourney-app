<?php

namespace Database\Factories\Employee;

use App\Models\Employee\EmployeeOtherInformation;
use App\Models\Employee\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee\EmployeeOtherInformation>
 */
class EmployeeOtherInformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = EmployeeOtherInformation::class;

    public function definition()
    {
        return [
            'marital_status' => $this->faker->randomElement(['Single', 'Married']),
            'marriage_date' => $this->faker->date,
            'religion' => $this->faker->randomElement(['Islam', 'Christianity', 'Buddhism', 'Catholic', 'Hinduism']),
            'blood_type' => $this->faker->optional()->randomElement(['A', 'A+', 'A-', 'B', 'B+', 'B-', 'AB', 'AB+', 'AB-', 'O', 'O+', 'O-']),
            'last_health_check_date' => $this->faker->optional()->date,
            'current_health_status' => $this->faker->optional()->paragraph,
            'height' => $this->faker->optional()->numberBetween(150, 200),
            'weight' => $this->faker->optional()->numberBetween(40, 100),
            'id_employee' => Employee::factory()
        ];
    }
}
