<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\UserController;

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


# Basic Auth
Route::get('/login',[LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login',[LoginController::class, 'login'])->name('login');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');

# Authenticated User
Route::group(['middleware' => ['auth']], function(){
    Route::get('/',[DashboardController::class, 'index'])->name('dashboard');

    # Profile
    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function(){
        Route::get('/', [ProfileController::class, 'index'])->name('index');
        Route::put('/update', [ProfileController::class, 'update'])->name('update');
    });

    # Activity
    Route::group(['prefix' => 'activity', 'as' => 'activity.'], function(){
        Route::get('/{user?}', [ActivityController::class, 'index'])->name('index');
        Route::post('/', [ActivityController::class, 'store'])->name('store');
        Route::delete('/{activity}', [ActivityController::class, 'destroy'])->name('destroy');
        Route::get('{activity}/edit', [ActivityController::class, 'edit'])->name('edit');
        Route::put('{activity}', [ActivityController::class, 'update'])->name('update');
    });

    Route::group(['middleware' => 'superadmin', 'prefix' => 'user', 'as' => 'user.'], function(){
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::post('/', [UserController::class, 'store'])->name('store');
        Route::put('/{user}', [UserController::class, 'update'])->name('update');
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('destroy');
    });

});

