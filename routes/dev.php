<?php

use App\Http\Controllers\DevController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;


// ` This is Used to Making Routes For Devlopment and Testing Purpose


Route::group(['prefix' => 'developer', 'as' => 'dev.'], function () {
    Route::get('/', [DevController::class,'index'])->name('home');
    Route::get('/buttons',[DevController::class, 'buttons'])->name('buttons');

    Route::get('/thumbnail',[ImageController::class, 'generateThumbnailindex'])->name('buttons');
    Route::post('/generate-thumbnail',[ImageController::class, 'generateThumbnail'])->name('buttons');
});