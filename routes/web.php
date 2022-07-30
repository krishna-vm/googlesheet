<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GooglesheetController;
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
Route::get('show', function () {
    return view('show');
});

Route::get('read', [GooglesheetController::class,'readsheet'])->name('read');
Route::get('show', [GooglesheetController::class,'viewsheetData'])->name('show');
Route::get('add', [GooglesheetController::class,'addData'])->name('add');
Route::post('addSave', [GooglesheetController::class,'addsheetData'])->name('addSave');
