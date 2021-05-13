<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE TABLE `appointments` (
                `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                `requester_email` VARCHAR(50) NOT NULL UNIQUE,
                `service_id` BIGINT UNSIGNED NOT NULL,
                `requested_at` DATETIME NULL DEFAULT NULL,
                `time_choice_id` BIGINT UNSIGNED NOT NULL,
                FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON UPDATE CASCADE ON DELETE RESTRICT,
                FOREIGN KEY (`time_choice_id`) REFERENCES `timechoices` (`id`) ON UPDATE CASCADE ON DELETE RESTRICT
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
        DB::statement('DROP TABLE IF EXISTS appointments');
    }
}
