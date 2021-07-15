<?php

namespace Database\Seeders;


use App\Models\Article;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(3)->create();
        \App\Models\Image::factory(2)->create();
        \App\Models\Doctor::factory(6)->create();
        \App\Models\Category::factory(3)->create();
        \App\Models\Tag::factory(5)->has(Article::factory()->count(15))->create();
        \App\Models\Comment::factory(10)->create();
        \App\Models\Service::factory(10)->create();
    }
}
