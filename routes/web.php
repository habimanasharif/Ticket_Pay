<?php

use Illuminate\Support\Facades\Route;
use Resources\Views\Livewire\Home;

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
    return view('home');
});
Route::get('/sign-up', function () {
    return view('signUp');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/un-paid-ticket', function () {
    return view('unPaid-ticket');
})->name('unPaid-ticket');

// require __DIR__.'/auth.php';
