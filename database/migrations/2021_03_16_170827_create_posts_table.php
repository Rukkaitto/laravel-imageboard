<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->text('com');
            $table->string('file')->nullable();

            $table->string('board_id', 4)->nullable();
            $table->foreign('board_id')->references('id')->on('boards');

            $table->bigInteger('quoting_id')->unsigned()->nullable();
            $table->foreign('quoting_id')->references('id')->on('posts');

            $table->bigInteger('thread_id')->unsigned()->nullable();
            $table->foreign('thread_id')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
