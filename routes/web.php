<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\UserController;

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
Route::get('/', [HomeController::class, 'index'])->name('index');

Route::group(['prefix' => 'users', 'as' => 'user.'], function(){
    Route::get('/{user}', [UserController::class, 'show'])->name('show');
});


Route::group(['prefix' => 'submission', 'as' => 'submission.'], function(){
    Route::post('/', [SubmissionController::class, 'store'])->name('store');
});
