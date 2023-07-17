<?php

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
    return redirect()->route('home');
});
Route::get('/users', function () {
    return view('auth.register');
})->name('users');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/deposit', [App\Http\Controllers\TransactionController::class, 'deposit'])->name('deposit');
Route::post('/deposit', [App\Http\Controllers\TransactionController::class, 'deposit_store'])->name('deposit_store');
Route::get('/withdrawal', [App\Http\Controllers\TransactionController::class, 'withdrawal'])->name('withdrawal');
Route::post('/withdrawal', [App\Http\Controllers\TransactionController::class, 'withdrawal_store'])->name('withdrawal_store');
