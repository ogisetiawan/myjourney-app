<?php

namespace Database\Factories\Employee;
use App\Models\Employee\EmployeeWorkHistory;
use App\Models\Employee\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee\EmployeeWorkHistory>
 */
class EmployeeWorkHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = EmployeeWorkHistory::class;

    public function definition()
    {
        return [
            'company_name' => $this->faker->company,
            'address' => $this->faker->optional()->address,
            'position_held' => $this->faker->optional()->jobTitle,
            'period_of_employment' => $this->faker->optional()->word,
            'id_employee' => Employee::factory()
        ];
    }
}
