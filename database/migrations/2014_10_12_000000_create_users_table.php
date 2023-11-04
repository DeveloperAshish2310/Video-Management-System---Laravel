<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->integer('username_change_limit')->default(3);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->timestamp('registration_date')->nullable();
            $table->string('password');
            $table->integer('user_theme')->default(1)->comment('0 is for Dark; 1 is for Light');
            $table->longText('movie_history')->nullable()->comment('Store Movie History');
            $table->longText('show_history')->nullable()->comment('Store Show History');
            $table->longText('fav_movie')->nullable()->comment('Store Favourite Movie');
            $table->longText('fav_show')->nullable()->comment('Store Favourite Show');
            $table->longText('added_movie')->nullable()->comment('Store added Movie');
            $table->longText('added_show')->nullable()->comment('Store added Show');
            $table->string('Favourite')->nullable();
            $table->ipAddress('last_login_id')->nullable();
            $table->integer('allow_access')->default(0)->comment('0 is for No Access; 1 is for Access; 2 is for Rejected');
            $table->integer('warnings')->default(0)->comment('Store Numbe rof Warning');
            $table->string('role')->default('User')->comment('Store Role of The User.');
            $table->string('tmdb_api_key')->nullable()->comment('Store tmdb Api key for Admin Role Only');
            $table->string('videohost_api_key')->nullable()->comment('Store StreamWish Api key for Admin Role Only');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
