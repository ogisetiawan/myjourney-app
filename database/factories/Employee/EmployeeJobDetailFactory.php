<?php

namespace Database\Factories\Employee;

use App\Models\Employee\Employee;
use App\Models\Employee\EmployeeJobHeader;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee\EmployeeJobDetail>
 */
class EmployeeJobDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'country' => $this->faker->country,
            'company' => $this->faker->company,
            'region' => $this->faker->city,
            'state_province' => $this->faker->state,
            'branch' => $this->faker->word,
            'work_location' => $this->faker->word,
            'division_group_vn' => $this->faker->optional()->randomElement(['1', '2', '3']),
            'division_code' => $this->faker->word,
            'division' => $this->faker->word,
            'bu_group' => $this->faker->word,
            'dept_code' => $this->faker->word,
            'department' => $this->faker->word,
            'job_grade' => $this->faker->word,
            'job_family' => $this->faker->word,
            'sub_job_family' => $this->faker->word,
            'job_title' => $this->faker->word,
            'cost_center' => $this->faker->optional()->word,
            'movement_type' => $this->faker->optional()->word,
            'movement_date' => $this->faker->optional()->date,
            'career_level' => $this->faker->word,
            'id_employee' => Employee::factory(),
            'id_employee_job_header' => EmployeeJobHeader::factory(),
        ];
    }
}
