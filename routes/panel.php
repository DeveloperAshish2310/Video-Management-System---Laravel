<?php

use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\StoreItemController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// ` This is Used to Making Routes For Admin Panel

Route::group(['prefix' => 'panel', 'as' => 'panel.'], function () {
    Route::get('/',[PanelController::class,'index'])->name('home');


    //` Route Group For Storing Data
    Route::group(['prefix' => 'store' ,'as' => 'store.'],function(){    

        // For Manage Records
        Route::get('manage/movie',[MovieController::class,'index'])->name('movie.manage');
        Route::get('manage/show',[ShowController::class,'index'])->name('show.manage');
        Route::get('manage/episdoe',[EpisodeController::class,'index'])->name('episode.manage');
        

        // For Adding Form View
        Route::get('/add/movie',[MovieController::class,'addindex'])->name('add.movie');
        Route::get('/add/show',[ShowController::class,'addindex'])->name('add.show');
        Route::get('/add/episode',[EpisodeController::class,'addindex'])->name('add.episode');
        // For Adding Up Data
        Route::post('/add/movie',[StoreItemController::class,'StoreMovie'])->name('add.movie');
        Route::post('/add/show',[StoreItemController::class,'StoreShow'])->name('add.show');
        Route::post('/add/episode',[StoreItemController::class,'StoreEpisode'])->name('add.episode');
    });


    //` For Users
    Route::group(['prefix' => 'users', 'as' => 'users.'],function() {
        Route::get('/',[UserController::class,'index'])->name('index');
        
    });

    
    
    
    
});