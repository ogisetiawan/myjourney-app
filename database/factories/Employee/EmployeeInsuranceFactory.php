<?php

namespace Database\Factories\Employee;

use App\Models\Employee\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee\EmployeeInsurance>
 */
class EmployeeInsuranceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'benefit_in_kind' => $this->faker->optional()->word,
            'social_security_by_local_government_id' => $this->faker->optional()->word,
            'epf_number' => $this->faker->optional()->word,
            'company_health_medical_insurance_id' => $this->faker->optional()->word,
            'insurance_name' => $this->faker->optional()->word,
            'nbi_number' => $this->faker->optional()->word,
            'nbi_validity' => $this->faker->optional()->date,
            'id_employee' => Employee::factory()
        ];
    }
}
