<?php
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
})->name("home");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//select2 test

Route::get('/search',[App\Http\Controllers\AutoCompleteController::class, 'index']);
Route::get('/autocomplete',[App\Http\Controllers\AutoCompleteController::class, 'search']);

Route::get('/searchSelect', [App\Http\Controllers\Select2SearchController::class, 'index']);
Route::get('/ajax-autocomplete-search', [App\Http\Controllers\Select2SearchController::class, 'selectSearch']);
