<?php

use App\Http\Controllers\PanelController;
use App\Http\Controllers\StoreItemController;
use Illuminate\Support\Facades\Route;


// ` This is Used to Making Routes For Admin Panel

Route::group(['prefix' => 'panel', 'as' => 'panel.'], function () {
    Route::get('/',[PanelController::class,'index'])->name('home');


    // Route Group For Storing Data
    Route::group(['prefix' => 'store' ,'as' => 'store.'],function(){    
        Route::get('/add/movie',[StoreItemController::class,'StoreMovie'])->name('add.movie');
        Route::get('/add/show',[StoreItemController::class,'StoreShow'])->name('add.show');
        Route::get('/add/episode',[StoreItemController::class,'StoreEpisode'])->name('add.episode');
    });


    
    
    
});