<?php

namespace Database\Factories;

use App\Models\Attendance;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

//Note: I follow this since, the video tutorial is not updated
//https://www.tutsmake.com/laravel-9-factory-generate-dummy-data-tutorial/

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class AttendanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attendance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_id_pk' => fake()->randomElement(Customer::all())['id'],
            'real_location' => fake()->randomElement(['Quezon City', 'Cavite City', 'Valenzuela City']),
            'site_location' => fake()->randomElement(['Quezon City', 'Cavite City', 'Valenzuela City']),
            'type' => fake()->randomElement(['time_in', 'time_out']),
            'remarks' => fake()->sentence(),
        ];
    }
}
