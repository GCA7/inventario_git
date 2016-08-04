<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('product_tag', function(Blueprint $table) {
        $table->increments('id');
        $table->integer('product_id')->unsigned();
        $table->integer('tag_id')->unsigned();

        $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');

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
        Schema::drop('article_tag');
        Schema::drop('tags');
    }
}
