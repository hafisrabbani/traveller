<?php

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
    return view('welcome');
});

Route::controller(UserController::class)->group(function () {
    Route::prefix('auth')->group(function () {
        Route::get('login', 'loginPage')->name('auth.loginPage');
        Route::post('login', 'loginValidate')->name('auth.loginValidate');

        Route::get('register', 'registerPage')->name('auth.registerPage');
    });
});
