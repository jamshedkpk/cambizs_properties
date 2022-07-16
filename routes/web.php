<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\CatagoryController;
use App\Http\Controllers\Admin\AdsController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){
// Routes for catagory
Route::get('/catagory',[CatagoryController::class,'index'])->name('catagory-index');
Route::get('/catagory/create',[CatagoryController::class,'create'])->name('catagory-create');
Route::get('/catagory/store',[CatagoryController::class,'store'])->name('catagory-store');
Route::get('/catagory/delete/{id}',[CatagoryController::class,'destroy'])->name('catagory-delete');
Route::get('/catagory/edit/{id}',[CatagoryController::class,'edit'])->name('catagory-edit');
Route::put('/catagory/update/{id}',[CatagoryController::class,'update'])->name('catagory-update');

// Routes for ads
Route::get('/ads',[AdsController::class,'index'])->name('ads-index');
Route::get('/ads/create',[AdsController::class,'create'])->name('ads-create');
Route::get('/ads/store',[AdsController::class,'store'])->name('ads-store');
Route::get('/ads/delete/{id}',[AdsController::class,'destroy'])->name('ads-delete');
Route::get('/ads/edit/{id}',[AdsController::class,'edit'])->name('ads-edit');
Route::put('/ads/update/{id}',[AdsController::class,'update'])->name('ads-update');

// Routes for role
Route::get('/role',[RoleController::class,'index'])->name('role-index');
Route::get('/role/create',[RoleController::class,'create'])->name('role-create');
Route::get('/role/store',[RoleController::class,'store'])->name('role-store');
Route::get('/role/delete/{id}',[RoleController::class,'destroy'])->name('role-delete');
Route::get('/role/edit/{id}',[RoleController::class,'edit'])->name('role-edit');
Route::put('/role/update/{id}',[RoleController::class,'update'])->name('role-update');

// Routes for country
Route::get('/country',[CountryController::class,'index'])->name('country-index');
Route::get('/country/create',[CountryController::class,'create'])->name('country-create');
Route::get('/country/store',[CountryController::class,'store'])->name('country-store');
Route::get('/country/delete/{id}',[CountryController::class,'destroy'])->name('country-delete');
Route::get('/country/edit/{id}',[CountryController::class,'edit'])->name('country-edit');
Route::put('/country/update/{id}',[CountryController::class,'update'])->name('country-update');

// Routes for state
Route::get('/state',[StateController::class,'index'])->name('state-index');
Route::get('/state/create',[StateController::class,'create'])->name('state-create');
Route::get('/state/store',[StateController::class,'store'])->name('state-store');
Route::get('/state/delete/{id}',[StateController::class,'destroy'])->name('state-delete');
Route::get('/state/edit/{id}',[StateController::class,'edit'])->name('state-edit');
Route::put('/state/update/{id}',[StateController::class,'update'])->name('state-update');

// Routes for city
Route::get('/city',[CityController::class,'index'])->name('city-index');
Route::get('/city/create',[CityController::class,'create'])->name('city-create');
Route::get('/city/store',[CityController::class,'store'])->name('city-store');
Route::get('/city/delete/{id}',[CityController::class,'destroy'])->name('city-delete');
Route::get('/city/edit/{id}',[CityController::class,'edit'])->name('city-edit');
Route::put('/city/update/{id}',[CityController::class,'update'])->name('city-update');        
});
