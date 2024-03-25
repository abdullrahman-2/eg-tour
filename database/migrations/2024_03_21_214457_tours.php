<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigInteger('tour_id')->primary();
            $table->bigInteger('category_id')->index();
            $table->foreign('category_id')->references('category_id')->on('travel_categories');
            $table->string('name');
            $table->text('img_path');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
