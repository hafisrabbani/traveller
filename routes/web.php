<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('page.home');
});

Route::get('/about', function () {
    return view('page.about');
});

Route::get('/details', function() {
    return view('page.detail');
});

Route::get('/profile', function() {
    return view('page.profil');
});

Route::controller(UserController::class)->group(function () {
    Route::prefix('auth')->group(function () {

        Route::middleware('guest')->group(function () {
            Route::get('login', 'loginPage')->name('auth.loginPage');
            Route::post('login', 'loginValidate')->name('auth.loginValidate');

            Route::get('register', 'registerPage')->name('auth.registerPage');
            Route::post('register', 'registerStore')->name('auth.registerStore');
        });

        Route::middleware('auth')->group(function () {
            Route::post('logout', 'logout')->name('auth.logout');
        });
    });
});
