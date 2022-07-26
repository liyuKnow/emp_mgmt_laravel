<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'first_name' => $this->faker->name(),
            'middle_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'emp_img' => $this->faker->imageUrl(640, 480, 'avatar', true),
            'job_title' => $this->faker->randomElements(['Developer', 'Net Admin', 'It support', 'Systems Administrator', 'Database Administrator', 'Systems Analyst', 'Web Developer'])[0],
            'status' => $this->faker->randomElements(['active', 'former'])[0],
        ];
    }
}
