<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DentalClinicController;
use App\Http\Controllers\MedicalClinicController;

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

Route::get('/dental/geojson/{like}', [DentalClinicController::class, 'geojson']);
Route::get('/dental', [DentalClinicController::class, 'index']);

Route::get('/medical/geojson/{like}', [MedicalClinicController::class, 'geojson']);
Route::get('/medical', [MedicalClinicController::class, 'index']);
