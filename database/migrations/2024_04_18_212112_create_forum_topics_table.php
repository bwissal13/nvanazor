<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateForumTopicsTable extends Migration
{
    public function up()
    {
        Schema::create('forum_topics', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // Add other attributes as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('forum_topics');
    }
}

