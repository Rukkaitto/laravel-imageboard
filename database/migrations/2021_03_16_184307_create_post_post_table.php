<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_post', function (Blueprint $table) {
            $table->increments('id');

            $table->bigInteger('quoter_id')->unsigned()->nullable();
            $table->foreign('quoter_id')->references('id')->on('posts');

            $table->bigInteger('quoted_id')->unsigned()->nullable();
            $table->foreign('quoted_id')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_post');
    }
}
