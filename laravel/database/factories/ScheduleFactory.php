<?php

namespace Database\Factories;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ScheduleFactory extends Factory
{
    /**
     * App\Models\Schedule
     *
     * @var string
     */
    protected $model = Schedule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
	    'name' => $this->faker->unique()->date(),
	    'start_time' => $this->faker->unique()->time(),
	    'end_time' =>  $this->faker->unique()->time(),
        ];
    }
}
