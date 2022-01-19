<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\VaccinationController;
use App\Models\Prescription;
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

Auth::routes(['verify' =>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/vaccination/create',[VaccinationController::class,'create'])->middleware(['verified','IsDoc']);

Route::post('/vaccination/store',[VaccinationController::class,'store'])->middleware(['verified','IsDoc']);

Route::get('/contact',[ContactController::class,'index']);

Route::post('/vaccination/signin',[VaccinationController::class,'signin'])->middleware('verified');

Route::get('/vaccination',[VaccinationController::class,'index'])->middleware('verified');

Route::get('/patient/create',[PatientController::class,'create'])->middleware(['verified','IsDoc']);

Route::get('/prescription/create',[PrescriptionController::class,'create'])->middleware(['verified','IsDoc']);

Route::get('/prescription',[PrescriptionController::class,'index'])->middleware(['verified']);

Route::post('/patient/update/',[PatientController::class,'update'])->middleware(['verified','IsDoc']);

Route::post('/patient/store',[PatientController::class,'store'])->middleware(['verified','IsDoc']);

Route::post('prescription/store',[PrescriptionController::class,'store'])->middleware(['verified','IsDoc']);

Route::get('/prescription/pdf',[PrescriptionController::class,'pdf']);

Route::get('/prescription/show/{id}',[PrescriptionController::class,'show']);

Route::get('/prescription/pdf/{id}',[PrescriptionController::class,'pdf']);

Route::get('/patient/edit/',[PatientController::class,'edit'])->middleware(['verified','IsDoc']);



