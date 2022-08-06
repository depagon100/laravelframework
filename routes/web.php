<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModuleOneController;
use App\Http\Controllers\ModuleTwoController;
use App\Http\Controllers\ModuleThreeController;
use App\Http\Controllers\ModuleFourController;
use App\Http\Controllers\TabsController;

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


Route::get('/layout', function () {
    return view('moduleOne');
});

Route::get('/layout', function () {
    return view('moduleTwo');
});

Route::get('/moduleOne', [ModuleOneController::class, 'index']);

Route::get('/saveData', [ModuleOneController::class, 'save']);
Route::get('/pdf', [ModuleOneController::class, 'pdf']);



Route::get('/moduleTwo', [ModuleTwoController::class, 'index']);
Route::get('/saveData', [ModuleTwoController::class, 'save']);
Route::get('/pdf', [ModuleTwoController::class, 'pdf']);


Route::get('/moduleThree', [ModuleThreeController::class, 'index']);
Route::get('/saveData', [ModuleThreeController::class, 'save']);
Route::get('/pdf',[ModuleThreeController::class, 'pdf']);


Route::get('/moduleFour',[ModuleFourController::class, 'index']);
Route::get('/saveData',[ModuleFourController::class, 'save']);
Route::delete('/deleteData',[ModuleFourController::class, 'delete']);
Route::get('/pdf', [ModuleFourController::class, 'pdf']);


Route::get('/moduleThree', [TabsController::class, 'moduleThree']);
Route::get('/moduleFour', [TabsController::class, 'moduleFour']);
Route::get('/moduleFive', [TabsController::class, 'moduleFive']);
Route::get('/moduleSix', [TabsController::class, 'moduleSix']);
