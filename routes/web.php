<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\CityController;

Route::get('/', function () 
{
return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/country',[CountryController::class,'index'])->name('country-index');
Route::get('/state',[StateController::class,'index'])->name('state-index');
Route::get('/city',[CityController::class,'index'])->name('city-index');

