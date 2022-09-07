<?php

use App\Http\Controllers\ModuleFiveController;
use App\Http\Controllers\ModuleFourController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleOneController;
use App\Http\Controllers\ModuleSixController;
use App\Http\Controllers\ModuleThreeController;
use App\Http\Controllers\ModuleTwoController;

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

Route::get('/radio', function () {
    return view('layout.radio');
});

/* Module One Controller */
Route::get('/moduleOne', [ModuleOneController::class, 'index']);

Route::get('/saveData', [ModuleOneController::class, 'save'])->name('layout.moduleOne');

Route::get('/pdf', [ModuleOneController::class, 'pdf']);

/* Module Two Controller */
Route::get('/moduleTwo', [ModuleTwoController::class, 'index']);

Route::get('/saveData2', [ModuleTwoController::class, 'save'])->name('layout.moduleTwo');

Route::get('/pdf2', [ModuleTwoController::class, 'pdf']);


/* Module Three Controller */
Route::get('/moduleThree', [ModuleThreeController::class, 'index']);

Route::get('/saveData3', [ModuleThreeController::class, 'save'])->name('layout.moduleThree');

Route::get('/pdf3', [ModuleThreeController::class, 'pdf']);

/* Module Four Controller */
Route::get('/moduleFour', [ModuleFourController::class, 'index']);

Route::get('/saveData4', [ModuleFourController::class, 'save'])->name('layout.moduleFour');
Route::get('/pdf4', [ModuleFourController::class, 'pdf']);
Route::delete('/deleteData',[ModuleFourController::class, 'delete']);



/* Module Five Controller */
Route::get('/moduleFive',[ModuleFiveController::class, 'index']);
Route::get('/saveData5',[ModuleFiveController::class, 'save']);

/* Module Six Controller */
Route::get('/moduleSix',[ModuleSixController::class, 'index']);
Route::get('/saveDataSix',[ModuleSixController::class, 'save']);
Route::delete('/DeleteData',[ModuleSixController::class, 'delete']);
Route::get('/pdf6',[ModuleSixController::class, 'pdf']);
