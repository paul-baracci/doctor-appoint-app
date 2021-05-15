<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Image::factory(10)->create();
		\App\Models\Category::factory(5)->create();
		\App\Models\Tag::factory(7)->create();
		\App\Models\Article::factory(15)->create();
		\App\Models\Comment::factory(10)->create();
        \App\Models\Service::factory(10)->create();
        //\App\Models\TimeChoice::factory(10)->create();
    }
}
