<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('hotels', function (Blueprint $table) {
            $table->bigIncrements('id'); // its already UNSIGNED
            $table->string('name', 60);
            $table->string('code', 6);
            $table->float('latitude', 8, 6);
            $table->float('longitude', 8, 6);
            $table->string('description', 500)->nullable(true);
            $table->string('terms_and_conditions', 500)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('hotels');
    }

}
