<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EpisodeRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episode_record',function (Blueprint $table){
            $table->id();

            $table->string('name');
            $table->string('show_id')->comment('Related to Show Table.');
            $table->string('episode_number')->default(1);
            $table->string('season_num')->default(1);
            $table->string('episode_code');
            $table->integer('like')->default(0);
            $table->integer('dislike')->default(0);
            $table->integer('view_count')->default(0);
            $table->integer('status')->comment('0 is for Unpublis; 1 is for Publish');
            $table->string('skip_part')->comment('Store The Time to Give Skip Intro or Outro.')->nullable();
            $table->string('uploader_details')->nullable();
            $table->longText('episode_details')->comment('Store Additional Details of episode.')->nullable();
            $table->string('misc_details')->comment('Store Misc. Details of episode.')->nullable();
            $table->string('poster_path')->comment('Store Episode Poster.')->nullable();
            $table->string('backdrop_path')->comment('Store Episode Backdrop Image.')->nullable();
            $table->timestamps();
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
        //
    }
}
