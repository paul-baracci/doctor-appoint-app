<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Image;
use App\Models\Schedule;


class DoctorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Doctor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
	    'name' => $this->faker->name(),
	    'specialization' => $this->faker->word(),
	    'image_id' => Image::inRandomOrder()->first()->id,
        ];
    }
}
