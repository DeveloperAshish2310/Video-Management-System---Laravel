<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Settings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->nullable();
            $table->string('value')->nullable();
            $table->string('group_name')->nullable();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });

        // Insert Requied Settings
        DB::table('settings')->insert([
            [
                'key' => 'tmdb_api',
                'value' => '1b57a91a55ac648c5ebf27ba0d4b0a24',
                'group_name' => 'Global_config',
            ],
            [
                'key' => 'meta_keyword',
                'value' => 'MyFlix, NetFilx, Portfolio Project, Laravel, Bootstrap, HTML, CSS, Javascript, PHP, MySQL, API, TMDB, Youtube, Vimeo, Movies, TV Shows, Series, Episodes, Actors, Directors, Producers, Genres, Tags, Categories, Search, Watch, Watch Later, Favorites, Comments, Reviews, Ratings, User Profile, Admin Panel, Dashboard, Settings, Profile, Password, Security, Logout, Login, Register, Forgot Password, Reset Password, Email Verification, Email, Verification, Verify, Verify Email, Verify Email Address, Verify Your Email Address, Verify Your Email, Verify Yo',
                'group_name' => 'Global_config',
            ],
            [
                'key' => 'meta_description',
                'value' => 'This Site is An Portfolio Project, Which is a Inspiration of Netflix and amazon Prime. This Site is Build with Laravel, Bootstrap, HTML, CSS, Javascript, PHP, MySQL, API, TMDB, Youtube, Vimeo.',
                'group_name' => 'Global_config',
            ],
            [
                'key' => 'video_api',
                'value' => '4568k1q1s0nnfvh46eow',
                'group_name' => 'Global_config',
            ],
            [
                'key' => 'video_folder_sync_id',
                'value' => '21992',
                'group_name' => 'Global_config',
            ],
            [
                'key' => 'video_folder_2part_id',
                'value' => '46435',
                'group_name' => 'Global_config',
            ],
            [
                'key' => 'video_folder_move_id',
                'value' => '57794',
                'group_name' => 'Global_config',
            ]
            
            
        ]);
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
