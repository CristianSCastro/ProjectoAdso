<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\BreedController;
use App\http\Controllers\AgeController;
use App\http\Controllers\ColorController;
use App\http\Controllers\VaccinationController;
use App\http\Controllers\ServiceController;
use App\http\Controllers\GroomerController;
use App\http\Controllers\OwnerController;
use App\http\Controllers\PetController;
use App\http\Controllers\PhoneController;
use App\http\Controllers\ServiceAppointmentController;
use App\http\Controllers\ServiceReportController;


use App\Http\Controllers\AuthController;


// Register route
Route::post('/register', [AuthController::class, 'register']);
// Login route
Route::post('/login', [AuthController::class, 'login']);
// Logout route (requires authentication)
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']); 
//Route::get('/breed/get', [BreedController::class, 'get']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::get('/api/breed/getData', [BreedController::class, 'getData']);

// BreedController
Route::get('/Breed/get-data', [BreedController::class, 'getData']);
Route::post('/Breed/save', [BreedController::class, 'save']);
Route::put('/Breed/update', [BreedController::class, 'update']);
Route::delete('/Breed/delete', [BreedController::class, 'delete']);

//AgeController
Route::get('/Age/get-data', [AgeController::class, 'getData']);
Route::post('/Age/save', [AgeController::class, 'save']);
Route::put('/Age/update', [AgeController::class, 'update']);
Route::delete('/Age/delete', [AgeController::class, 'delete']);

//ColorController
Route::get('/Color/get-data', [ColorController::class, 'getData']);
Route::post('/Color/save', [ColorController::class, 'save']);
Route::put('/Color/update', [ColorController::class, 'update']);
Route::delete('/Color/delete', [ColorController::class, 'delete']);

//VaccinationController
Route::get('/Vaccination/get-data', [VaccinationController::class, 'getData']);
Route::post('/Vaccination/save', [VaccinationController::class, 'save']);
Route::put('/Vaccination/update', [VaccinationController::class, 'update']);
Route::delete('/Vaccination/delete', [VaccinationController::class, 'delete']);

//ServiceController
Route::get('/Service/get-data', [ServiceController::class, 'getData']);
Route::post('/Service/save', [ServiceController::class, 'save']);
Route::put('/Service/update', [ServiceController::class, 'update']);
Route::delete('/Service/delete', [ServiceController::class, 'delete']);

//GroomerController
Route::get('/Groomer/get-data', [GroomerController::class, 'getData']);
Route::post('/Groomer/save', [GroomerController::class, 'save']);
Route::put('/Groomer/update', [GroomerController::class, 'update']);
Route::delete('/Groomer/delete', [GroomerController::class, 'delete']);

//OwnerController
Route::get('/Owner/get-data', [OwnerController::class, 'getData']);
Route::post('/Owner/save', [OwnerController::class, 'save']);
Route::put('/Owner/update', [OwnerController::class, 'update']);
Route::delete('/Owner/delete', [OwnerController::class, 'delete']);

//PetController
Route::get('/Pet/get-data', [PetController::class, 'getData']);
Route::post('/Pet/save', [PetController::class, 'save']);
Route::put('/Pet/update', [PetController::class, 'update']);
Route::delete('/Pet/delete', [PetController::class, 'delete']);

//PhoneController
Route::get('/Phone/get-data', [PhoneController::class, 'getData']);
Route::post('/Phone/save', [PhoneController::class, 'save']);
Route::put('/Phone/update', [PhoneController::class, 'update']);
Route::delete('/Phone/delete', [PhoneController::class, 'delete']);

//ServiceAppointmentController
Route::get('/ServiceAppointment/get-data', [ServiceAppointmentController::class, 'getData']);
Route::post('/ServiceAppointment/save', [ServiceAppointmentController::class, 'save']);
Route::put('/ServiceAppointment/update', [ServiceAppointmentController::class, 'update']);
Route::delete('/ServiceAppointment/delete', [ServiceAppointmentController::class, 'delete']);

//ServiceReportController
Route::get('/ServiceReport/get-data', [ServiceReportController::class, 'getData']);
Route::post('/ServiceReport/save', [ServiceReportController::class, 'save']);
Route::put('/ServiceReport/update', [ServiceReportController::class, 'update']);
Route::delete('/ServiceReport/delete', [ServiceReportController::class, 'delete']);



//Route::save('/api/Breed/save', [Breedcontroller::class, 'save']);
