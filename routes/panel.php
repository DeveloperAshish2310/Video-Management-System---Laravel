<?php

use App\Http\Controllers\PanelController;
use Illuminate\Support\Facades\Route;


// ` This is Used to Making Routes For Admin Panel

Route::group(['prefix' => 'panel', 'as' => 'panel.'], function () {
    Route::get('/',[PanelController::class,'index'])->name('home');

});