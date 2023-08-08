<?php

namespace Database\Factories\Employee;
use App\Models\Employee\EmployeeFormalEducation;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee\Employee;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee\EmployeeFormalEducation>
 */
class EmployeeFormalEducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = EmployeeFormalEducation::class;

    public function definition()
    {
        return [
            'education_grade' => $this->faker->optional()->randomDigit,
            'institution' => $this->faker->optional()->company,
            'major' => $this->faker->optional()->word,
            'gpa_score' => $this->faker->optional()->randomFloat(2, 0, 4),
            'id_employee' => Employee::factory()
        ];
    }
}
