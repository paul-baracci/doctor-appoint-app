<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->text('article_title');
            $table->text('article_description');
            $table->text('article_content');
            $table->datetime('published_at');
            
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');

            $table->unsignedBigInteger('image_id');
            $table->foreign('image_id')
                  ->references('id')
                  ->on('images')
                  ->unique()
                  ->onDelete('restrict')
                  ->onUpdate('cascade');

            $table->string('seo_title');
            $table->string('seo_description');
            $table->string('slug')->unique();

            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
