<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\CityController;

Route::get('/', function () 
{
return view('home');
});

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){
Route::get('/country',[CountryController::class,'index'])->name('country-index');
Route::get('/country/create',[CountryController::class,'create'])->name('country-create');
Route::get('/country/store',[CountryController::class,'store'])->name('country-store');
Route::get('/country/delete/{id}',[CountryController::class,'destroy'])->name('country-delete');
Route::get('/country/edit/{id}',[CountryController::class,'edit'])->name('country-edit');
Route::put('/country/update/{id}',[CountryController::class,'update'])->name('country-update');

Route::get('/state',[StateController::class,'index'])->name('state-index');
Route::get('/state/create',[StateController::class,'create'])->name('state-create');
Route::get('/state/store',[StateController::class,'store'])->name('state-store');
Route::get('/state/delete/{id}',[StateController::class,'destroy'])->name('state-delete');
Route::get('/state/edit/{id}',[StateController::class,'edit'])->name('state-edit');
Route::put('/state/update/{id}',[StateController::class,'update'])->name('state-update');

Route::get('/city',[CityController::class,'index'])->name('city-index');
Route::get('/city/create',[CityController::class,'create'])->name('city-create');
Route::get('/city/store',[CityController::class,'store'])->name('city-store');
Route::get('/city/delete/{id}',[CityController::class,'destroy'])->name('city-delete');
Route::get('/city/edit/{id}',[CityController::class,'edit'])->name('city-edit');
Route::put('/city/update/{id}',[CityController::class,'update'])->name('city-update');        
});
