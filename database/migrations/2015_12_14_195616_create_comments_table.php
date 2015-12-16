<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function(Blueprint $table){

            $table->increments('id');
            $table->unsignedInteger('post_id');
            $table->unsignedInteger('comment_author');
            $table->text('comment_content');
            $table->timestamps();

            $table->foreign('post_id')
                  ->references('id')
                  ->on('posts');

            $table->foreign('comment_author')
                  ->references('id')
                  ->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comments');
    }
}
