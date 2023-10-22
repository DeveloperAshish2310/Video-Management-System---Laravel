<?php

use App\Http\Controllers\DevController;
use Illuminate\Support\Facades\Route;


// ` This is Used to Making Routes For Devlopment and Testing Purpose


Route::group(['prefix' => 'developer', 'as' => 'dev.'], function () {
    Route::get('/', [DevController::class,'index'])->name('home');

});