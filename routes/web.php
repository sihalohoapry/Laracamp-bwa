<?php

use App\Http\Controllers\UserController;
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



Route::get('checkout', function () {
    return view('checkout');
})->name('checkout');
Route::get('checkout-success', function () {
    return view('checkout-success');
})->name('checkout-success');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/', function () {
    return view('welcome');
})->middleware(['auth'])->name('welcome');

Route::get('sign-google',[UserController::class,'google'])->name('sign-google');
Route::get('auth/google/callback',[UserController::class,'handleProviderCallback'])->name('auth-google');

require __DIR__.'/auth.php';


