<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCascadeToForeignKeys extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('artworks', function (Blueprint $table) {
            $table->dropForeign(['artist_id']);
            $table->foreign('artist_id')
                ->references('id')
                ->on('artists')
                ->onDelete('cascade');
        });

        Schema::table('artist_artwork', function (Blueprint $table) {
            $table->dropForeign(['artist_id']);
            $table->dropForeign(['artwork_id']);
            $table->foreign('artist_id')
                ->references('id')
                ->on('artists')
                ->onDelete('cascade');

            $table->foreign('artwork_id')
                ->references('id')
                ->on('artworks')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // This migration is irreversible
    }
}
