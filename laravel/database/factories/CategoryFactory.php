<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word(),
            'slug' => Str::slug($this->faker->unique()->name(), '-'),
            'image_id' => Image::inRandomOrder()->first()->id,
            'seo_title' => $this->faker->word(2),
            'seo_description' => $this->faker->sentence(),
        ];
    }
}
