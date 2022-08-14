<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

//Note: I follow this since, the video tutorial is not updated
//https://www.tutsmake.com/laravel-9-factory-generate-dummy-data-tutorial/

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_id' => fake()->numerify('###-###'),
            'first_name' => fake()->firstname(),
            'last_name' => fake()->lastname(),
            'email' => fake()->safeEmail(),
            'password' => fake()->numerify('123'),
            'privilege' => fake()->randomElement(['Super Admin', 'Admin', 'Regular']),
        ];
    }
    //php artisan tinker
    //Customer::factory()->count(20)->create()
}
