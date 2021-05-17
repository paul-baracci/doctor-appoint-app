<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Image;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'article_title' => $this->faker->unique()->word(),
            'article_description' => $this->faker->sentence(),
            'user_id' => User::inRandomOrder()->first()->id,
            'article_content' => $this->faker->paragraph(),
            'image_id' => Image::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
            'published_at' => $this->faker->unique()->date(),
            'seo_title' => $this->faker->word(),
            'seo_description' => $this->faker->sentence(),
            'slug' => Str::slug($this->faker->unique()->word(2), '-'),
        ];
    }
}
