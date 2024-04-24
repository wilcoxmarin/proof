<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanieController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AuthController;



Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/getinto', [AuthController::class, 'getInto']);
Route::post('/logout', [AuthController::class, 'logOut']);



Route::middleware('auth')->group(function (){
    Route::resources([
        'companies' => CompanieController::class,
        'employees' => EmployeController::class
    ]);
});
