<?php

use App\Http\Controllers\ExpertiseController;
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
    //return view('site');
    return view('flyer');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/expertise', [ExpertiseController::class, 'index']);
Route::get('/expertise/create', [ExpertiseController::class, 'create']);
Route::post('/expertise/store', [ExpertiseController::class, 'store']);
