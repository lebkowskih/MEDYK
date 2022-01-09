<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\PrescriptionController;
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



Route::post('/patient/update/',[PatientController::class,'update']);

Route::post('/patient/store',[PatientController::class,'store']);

Route::post('prescription/store',[PrescriptionController::class,'store'])->middleware('IsDoc');

Route::get('/patient/create',[PatientController::class])->middleware('IsDoc');

Route::get('/prescription/create',[PatientController::class,'create'])->middleware('IsDoc');

Route::get('/vaccination/create',[VaccinationController::class])->middleware('IsDoc');

Route::get('/prescription/pdf',[PrescriptionController::class,'pdf']);

Route::get('/prescription/show/{id}',[PrescriptionController::class,'show']);

Route::get('/prescription/pdf/{id}',[PrescriptionController::class,'pdf']);

Route::get('/patient/edit/',[PatientController::class,'edit'])->middleware('IsDoc');


Route::resource('/patient',PatientController::class);

Route::resource('/prescription',PrescriptionController::class);
