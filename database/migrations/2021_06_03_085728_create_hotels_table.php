<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->integer('id_hotel')->autoIncrement();
            $table->integer('id_location');
            $table->foreign('id_location')->references('id_location')->on('location');
            $table->string('hotel_name');
            $table->string('address');
            $table->integer('price');
            $table->string('description');
            $table->ipAddress('images');
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
        Schema::dropIfExists('hotels');
    }
}
