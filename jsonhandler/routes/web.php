<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeviceController;
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


Route::get('/saveuser',[UserController::class,'saveuser']);


Route::get('/devices', [DeviceController::class, 'index'])->name('devices.index');
Route::get('/devices/create', [DeviceController::class, 'create'])->name('devices.create');
Route::get('/devices/{device}', [DeviceController::class, 'show'])->name('devices.show');
Route::post('/devices', [DeviceController::class, 'store'])->name('devices.store');
Route::get('/devices/{device}/edit', [DeviceController::class, 'edit'])->name('devices.edit');
Route::patch('/devices/{device}', [DeviceController::class, 'update'])->name('devices.update');

Route::delete('/devices/{device}', [DeviceController::class, 'destroy'])->name('devices.destroy');
Route::get('/process-all-json', [DeviceController::class, 'processJsonFile'])->name('devices.processJsonFile');
Route::get('/export-json', [DeviceController::class, 'exportToJson']);
