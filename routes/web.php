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

Route::get('/country/create',[CountryController::class,'create'])->name('country-create');
Route::get('/state/create',[StateController::class,'create'])->name('state-create');
Route::get('/city/create',[CityController::class,'create'])->name('city-create');

Route::get('/country/store',[CountryController::class,'store'])->name('country-store');
Route::get('/state/store',[StateController::class,'store'])->name('state-store');
Route::get('/city/store',[CityController::class,'store'])->name('city-store');

