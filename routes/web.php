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


Route::controller(UserController::class)->group(function () {
    Route::prefix('auth')->group(function () {

        Route::middleware('guest')->group(function () {
            Route::get('login', 'loginPage')->name('auth.loginPage');
            Route::post('login', 'loginValidate')->name('auth.loginValidate');

            Route::get('register', 'registerPage')->name('auth.registerPage');
            Route::post('register', 'registerStore')->name('auth.registerStore');
        });

        Route::middleware('auth')->group(function () {
            Route::get('profile', 'profilePage')->name('profile');
            Route::get('logout', 'logout')->name('auth.logout');
        });
    });
});

Route::controller(DestinationController::class)->group(function () {
    Route::prefix('destination')->group(function () {
        Route::get('/', 'index')->name('destination');
        Route::get('detail/{id}', 'detail')->name('destination.detail');
        Route::post('detail/comment', 'commentCreate')->name('destination.comment');
    });
});
