<?php

use App\Http\Controllers\LogoutController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Home;
use App\Livewire\Profile\Index as ProfileIndex;
use App\Livewire\Profile\Setting;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->prefix('/')->group(function () {
    Route::prefix('home')->group(function () {
        Route::get('/', Home::class)->name('home');
    });

    Route::get('logout', LogoutController::class)->name('logout');

    Route::prefix('profile')->group(function () {
        Route::get('/', ProfileIndex::class)->name('profile');

        Route::get('/setting', Setting::class)->name('setting');
    });
});

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)->name('login');

    Route::get('register', Register::class)->name('register');
});
