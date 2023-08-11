<?php

namespace Database\Factories\Employee;

use App\Models\Employee\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee\Employee>
 */
class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    public function definition()
    {
        return [
            'code_employee' => $this->faker->unique()->numberBetween(1000, 9999),
            'salutation' => $this->faker->title,
            'name' => $this->faker->name,
            'nick_name' => $this->faker->firstName,
            'photo' => null,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'birth_date' => $this->faker->date,
            'age' => $this->faker->numberBetween(18, 60),
            'birth_place' => $this->faker->city,
            'country_of_birth' => $this->faker->country,
            'nationality' => $this->faker->country,
            'race' => $this->faker->word,
            'internal_order_SAP' => null,
            'status' => $this->faker->randomElement(['Y', 'N']),
            'created_by' => null,
            'updated_by' => null,
        ];
    }
}
