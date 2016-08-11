<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nombre_producto');
        $table->integer('precio_producto');
        $table->integer('cantidad_solicitada');
        $table->integer('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
      Schema::drop('cars');
  }
    }
}
