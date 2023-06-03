<?php

use App\Http\Controllers\DestinationController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/about', function () {
    return view('page.about');
})->name('about');

// Route::get('/details', function() {
//     return view('page.detail')->name('detail');
// });

Route::get('/profile', function () {
    return view('page.profil');
})->name('profile');

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

Route::controller(DestinationController::class)->group(function () {
    Route::prefix('destination')->group(function () {

        Route::get('detail/{id}', 'index')->name('destination.detail');
    });
});
