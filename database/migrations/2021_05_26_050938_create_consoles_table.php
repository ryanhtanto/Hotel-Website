<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consoles', function (Blueprint $table) {
            $table->integer('id_console')->autoIncrement();
            $table->integer('id_category');
            $table->foreign('id_category')->references('id_category')->on('category');
            $table->string('console_name');
            $table->integer('harga');
            $table->string('deskripsi');
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
        Schema::dropIfExists('consoles');
    }
}
