<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DuckController;

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

Route::get('/duck/{id}', [DuckController::class, 'show']);

Route::get('/duck', [DuckController::class, 'create']);

Route::post('/duck', [DuckController::class, 'store']);

Route::put('/duck/{id}', [DuckController::class, 'update']);
