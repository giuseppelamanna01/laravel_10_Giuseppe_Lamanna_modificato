<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\DeviceController;

Route::get('/', [PublicController::class, 'homepage'])->name('home');
Route::get('/contattaci', [PublicController::class, 'contactUs'])->name('contact.us');
Route::post('/contattaci/invio', [PublicController::class, 'submit'])->name('contattaci.invio');
Route::get('/contattaci/invio/success', [PublicController::class, 'success'])->name('contattaci.invio.success');
Route::get('/device/insert', [DeviceController::class, 'insert'])->name('device.insert');
Route::get('/devicesList', [DeviceController::class, 'deviceList'])->name('device.list');
Route::post('/device/submit', [DeviceController::class, 'store'])->name('device.submit');
Route::get('/device/{device}', [DeviceController::class, 'dettaglio'])->name('device.dettaglio');