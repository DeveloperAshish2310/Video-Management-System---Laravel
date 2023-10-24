<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MovieRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_records', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tmdb_id');
            $table->string('video_code')->nullable();
            $table->longText('movie_details')->nullable();
            $table->integer('likes')->default(0);
            $table->integer('dislikes')->default(0);
            $table->integer('view_count')->default(0);
            $table->integer('status')->default(1);
            $table->string('category')->nullable();
            $table->string('uploader_details')->nullable();
            $table->string('credit')->nullable();
            $table->string('stats')->nullable();
            $table->string('language')->nullable();
            $table->longText('video_details');     
            $table->string('misc_details')->comment('Store Misc. Details of Movie.');
            $table->softDeletes($column = 'deleted_at', $precision = 0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_records');
    }
}
