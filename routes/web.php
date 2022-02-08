<?php

use App\Http\Controllers\{ContractController, ContractPersonController ,EstateController, PersonController};
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('people/pdf/{id}', [PersonController::class, 'printPDF']);
Route::resource('/people', PersonController::class);
Route::get('estates/pdf/{id}', [EstateController::class, 'printPDF']);
Route::resource('/estates', EstateController::class);
Route::get('contracts/pdf/{id}', [ContractController::class, 'printPDF']);
Route::resource('/contracts', ContractController::class);
Route::get('contract-person/pdf/{id}', [ContractPersonController::class, 'printPDF']);
Route::resource('contract-person', ContractPersonController::class);