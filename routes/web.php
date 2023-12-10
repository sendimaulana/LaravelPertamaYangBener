<?php

use App\Http\Controllers\CobaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/coba/{no}',[CobaController::class, 'coba']);

Route::get('/test', [CobaController::class, 'index']);
Route::get('/test/{ke}', [CobaController::class, 'urutan']);