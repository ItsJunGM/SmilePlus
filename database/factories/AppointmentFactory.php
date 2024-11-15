<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Appointment;
use App\Models\Dentist;
use app\models\Service;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dentist_id' => Dentist::factory(),
            'service_id' => Service::factory(),
            'date' => $this->faker->date(),
            'hour' => $this->faker->time(),
            'patient_name' => $this->faker->name(),
            'patient_lastname' => $this->faker->lastName(),
            'patient_phone' => $this->faker->phoneNumber(),
        ];
    }
}
