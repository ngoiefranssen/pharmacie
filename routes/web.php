<?php

use App\Http\Controllers\Backend\CashierController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('cashiers', CashierController::class)->except(['delete']);
Route::get('/delete_Cashier/{id}', [CashierController::class, 'delete_Cashier'])->name('delete_Cashier.delete');

require __DIR__.'/auth.php';
