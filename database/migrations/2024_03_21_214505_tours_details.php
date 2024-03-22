<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ToursDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours_details', function (Blueprint $table){
            $table->bigInteger('tour_id')->index();
            $table->string('name');
            $table->string('description');
            $table->integer('duration');
            $table->decimal('price', 10, 2)->unsigned();
            $table->text('primary_img');
            $table->text('overall_img');
            $table->text('program');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours_details');
    }
}
