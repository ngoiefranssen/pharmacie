<?php

use App\Http\Controllers\Backend\CashierController;
use App\Http\Controllers\Backend\PatientController;
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
    return view('welcome');
});

Route::get('/home', function () { return view('home.main'); });

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('cashiers', CashierController::class);
Route::get('/delete_Cashier/{id}', [CashierController::class, 'delete_Cashier'])->name('delete_Cashier.delete');

Route::resource('patients', PatientController::class);
Route::get('/delete_patient/{id}', [PatientController::class, 'delete_patient'])->name('delete_patient.delete');