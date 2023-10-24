<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ShowRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('show_record',function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('tmdb_id');
            $table->string('show_id')->comment('store System Generated Id');
            $table->integer('like')->default(0);
            $table->integer('dislike')->default(0);
            $table->integer('view_count')->default(0);
            $table->string('category')->comment('store category in Json');
            $table->integer('status')->comment('0 is for Unpublis; 1 is for Publish');
            $table->longText('show_details')->comment('Store Additional Details of Show.');
            $table->string('uploader_details');
            $table->string('misc_details')->comment('Store Misc. Details of Show.');
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
