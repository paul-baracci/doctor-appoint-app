<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;



class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE TABLE `services` (
              `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
              `title` VARCHAR(50) NOT NULL,
              `description` TEXT(150) NOT NULL,
              `category_id` BIGINT UNSIGNED NOT NULL,
              `image_id` BIGINT UNSIGNED NOT NULL,
              `seo_title` VARCHAR(60) NOT NULL,
              `seo_description` VARCHAR(150) NOT NULL,
              `slug` VARCHAR(255) NOT NULL UNIQUE,
              `created_at` DATETIME NULL DEFAULT NULL,
              `updated_at` DATETIME NULL DEFAULT NULL,
              FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE ON DELETE CASCADE,
              FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON UPDATE CASCADE ON DELETE CASCADE
            ) ENGINE=InnoDB
            ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE IF EXISTS services');
    }
}
