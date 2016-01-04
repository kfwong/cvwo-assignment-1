<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('post_author');
            $table->longText('post_content');
            $table->text('post_title');
            $table->text('post_featured_image_url');
            $table->timestamps();

            $table->foreign('post_author')
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
        Schema::drop('posts');
    }
}
