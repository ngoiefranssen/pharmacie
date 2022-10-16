<?php

use App\Http\Controllers\Backend\CashierController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\InvoiceController;
use App\Http\Controllers\Backend\MedicationController;
use App\Http\Controllers\Backend\OrderedController;
use App\Http\Controllers\Backend\PatientController;
use App\Http\Controllers\Backend\PharmacistController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () { return view('home.main'); });  //->middleware('auth')

Route::resource('cashiers', CashierController::class);
Route::get('/delete_Cashier/{id}', [CashierController::class, 'delete_Cashier'])->name('delete_Cashier.delete');

Route::resource('patients', PatientController::class);
Route::get('/delete_patient/{id}', [PatientController::class, 'delete_patient'])->name('delete_patient.delete');

Route::resource('invoices', InvoiceController::class);
Route::get('/delete_invoice/{id}', [InvoiceController::class, 'delete_invoice'])->name('delete_invoice.delete');

Route::resource('pharmacists', PharmacistController::class);
Route::get('/delete_pharmacist/{id}', [PharmacistController::class, 'delete_pharmacist'])->name('delete_pharmacist.delete');

Route::resource('categories', CategoryController::class);
Route::get('/delete_category/{id}', [ CategoryController::class, 'delete_category' ])->name('delete_category.delete');

Route::resource('medications', MedicationController::class);
Route::get('/medication_delete/{id}', [MedicationController::class, 'medication_delete'])->name('medication_delete.delete');

Route::resource('ordereds', OrderedController::class);
Route::get('/ordered_delete', [OrderedController::class, 'ordered_delete'])->name('ordered_delete.delete');