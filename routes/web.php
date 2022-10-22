<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\infoController;
use App\Http\Controllers\OwnerAuthController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/info', function () {
    return view('info');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});



Route::get('/profile', function () {
    return view('profile');
});


Route::get('/editprofile', function () {
    return view('editprofile');
});

Route::post('store', [infoController::class, 'store']);


Route::get('owner', function () {
    return view('owner.signup');
});

Route::get('signup', [OwnerAuthController::class, 'signup'])->name('signup-user');
Route::post('custom-signup', [OwnerAuthController::class, 'customSignup'])->name('signup.custom');
Route::get('owner/login', [OwnerAuthController::class, 'login'])
    ->name('owner.login');
Route::post('owner/login', [OwnerAuthController::class, 'handleLogin'])
    ->name('owner.handleLogin');
Route::get('owner/logout', [OwnerAuthController::class, 'index'])
    ->name('owner.logout');


