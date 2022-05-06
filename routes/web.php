<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CountryController;

Route::get('/', function () 
{
return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/country',[CountryController::class,'index'])->name('country-index');

// To set vue.js with laravel compatable
Route::view('/{any}', 'home')
    ->middleware('auth')
    ->where('any', '.*');
