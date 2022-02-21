<?php

use App\Http\Controllers\{ContractController, ContractPersonController, ContractEstateController, ContractDocumentController, DocumentController ,EstateController, PersonController};
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('indicaciones', function(){
    return view('indicaciones');
});
Route::resource('/people', PersonController::class);
Route::resource('/estates', EstateController::class);
Route::get('contracts/pdf/{id}', [ContractController::class, 'printPDF']);
Route::resource('/contracts', ContractController::class);
Route::resource('contract-person', ContractPersonController::class);
Route::resource('contract-estate', ContractEstateController::class);
Route::resource('contract-documents', ContractDocumentController::class);
Route::resource('documents', DocumentController::class);