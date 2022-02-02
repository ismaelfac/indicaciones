<?php

use App\Http\Controllers\{ContractController ,EstateController};
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('estates/pdf/{id}', [EstateController::class, 'printPDF']);
Route::resource('/estates', EstateController::class);
Route::get('contracts/pdf/{id}', [ContractController::class, 'printPDF']);
Route::resource('/contracts', ContractController::class);