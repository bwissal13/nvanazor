<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddArtworkIdToShoppingCartsTable extends Migration
{
    public function up()
    {
        Schema::table('shopping_carts', function (Blueprint $table) {
            $table->foreignId('artwork_id')->constrained('artworks')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('shopping_carts', function (Blueprint $table) {
            $table->dropForeign(['artwork_id']);
            $table->dropColumn('artwork_id');
        });
    }
}
