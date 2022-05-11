<?php

use App\Http\Controllers\{ContractController, ContractPersonController, ContractEstateController, ContractDocumentController, DocumentController ,EstateController, IndicatorsController, PersonController };
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('indicaciones', function(){
    return view('indicaciones');
});
Route::resource('/indicators', IndicatorsController::class);
Route::resource('/people', PersonController::class);
Route::get('personDni/{dni}', [PersonController::class, 'findDni']);
Route::get('/findLegalPerson/{dni}', [PersonController::class, 'findLegalPerson']);
Route::resource('/estates', EstateController::class);
Route::get('/findEstateAddress/{address}', [EstateController::class, 'findEstateAddress']);
Route::get('contracts/pdf/{id}', [ContractController::class, 'printPDF']);
Route::get('contractsDocument/{id}', [ContractController::class, 'getContractDocuments']);
Route::resource('/contracts', ContractController::class);
Route::resource('contract-person', ContractPersonController::class);
Route::resource('contract-estate', ContractEstateController::class);
Route::resource('contractDocuments', ContractDocumentController::class);
Route::resource('documents', DocumentController::class);
Route::get('documentsCategoy/{category}', [DocumentController::class, 'getDocumentsCategoy']);
Route::resource('documentsEstate', DocumentController::class);
Route::resource('documentsPerson', DocumentController::class);
