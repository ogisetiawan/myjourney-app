<?php

namespace Database\Factories\Employee;
use App\Models\Employee\EmployeeInformalEducation;
use App\Models\Employee\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee\EmployeeInformalEducation>
 */
class EmployeeInformalEducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = EmployeeInformalEducation::class;

    public function definition()
    {
        return [
            'course_training' => $this->faker->word,
            'institution' => $this->faker->optional()->company,
            'start_date' => $this->faker->optional()->date,
            'end_date' => $this->faker->optional()->date,
            'duration_type' => $this->faker->optional()->randomElement(['hours', 'days', 'weeks', 'months']),
            'duration' => $this->faker->optional()->numberBetween(1, 12),
            'expired_date' => $this->faker->optional()->date,
            'course_fee' => $this->faker->optional()->randomFloat(2, 100, 1000),
            'education_description' => $this->faker->optional()->paragraph,
            'have_certificate' => $this->faker->boolean,
            'attachment' => $this->faker->optional()->word,
            'id_employee' => Employee::factory()
        ];
    }
}
