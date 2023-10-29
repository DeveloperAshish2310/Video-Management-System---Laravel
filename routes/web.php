<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// ` Verify User Type and Redirect TO Its Desire Page
Route::get('/home',[WebsiteController::class,'home'])->middleware(['auth'])->name('home');



Route::get('/', [WebsiteController::class,'index'])->name('home');

Route::group([], function () {
    require __DIR__.'/auth.php';
    require_once(__DIR__ . '/panel.php');
    require_once(__DIR__ . '/dev.php');
});

Route::get('/welcome', function () {
    return view('welcome');
});