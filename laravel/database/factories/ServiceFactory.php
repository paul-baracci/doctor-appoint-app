<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Image;
use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->word(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomNumber(),
            'category_id' => Category::inRandomOrder()->first()->id,
            'image_id' => Image::inRandomOrder()->first()->id,
            'seo_title' => $this->faker->word(),
            'seo_description' => $this->faker->sentence(),
            'slug' => Str::slug($this->faker->unique()->word(2), '-'),
            'requests' => $this->faker->randomNumber(),
        ];
    }
}
