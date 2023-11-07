<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::view('/', 'index')->name('index');
Route::view('about', 'learnabout')->name('about');
Route::view('get_premium', 'get_premium')->name('get_premium');


Route::get('login', function() {
    return Inertia::render('Login');
})->name('login');

Route::post('login', function() {
    $attributes = request()->validate([
        'email' => 'required|email|max:100',
        'password' => 'required|string|min:7|max:100'
    ]);

    if (Auth::attempt($attributes)) {
        request()->session()->regenerate();

        return redirect()->route('home');
    } else {
        return back()->withErrors([
            'email' => 'Cuenta no encontrada'
        ]);
    }
});

Route::get('logeado', fn() => 'Logeado xd')->name('home');
