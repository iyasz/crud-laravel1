<?php

use App\Http\Controllers\guruController;
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
    return view('home');
});

Route::get('/guru', [guruController::class, 'index']);

Route::post('/guru/store', [guruController::class, 'create']);

Route::get('/guru/delete/{id}', [guruController::class, 'delete']);

Route::get('/guru/update/{id}', [guruController::class, 'updateview']);

Route::put('/guru/{id}', [guruController::class, 'update']);
