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
            /*
            Server type: MariaDB >>> 10.2 and less than >> not json data inside version
            Server type: mySQL >> not found Problem [josn Data]
            */
            $table->id();
            $table->json('title'); // for longtext in phpMyAdmin >> because this is Server Type: MariaDB
            $table->json('slug');
            $table->json('body');
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
        Schema::dropIfExists('posts');
    }
}
