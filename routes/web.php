<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\TaxTypeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TaxEntityController;
use App\Http\Controllers\FinancialAccountController;
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
    return view('layouts/master');
});



Route::resource('master/tax-types', TaxTypeController::class);
Route::resource('master/employees', EmployeeController::class);
Route::resource('master/financial_accounts', FinancialAccountController::class);
Route::resource('master/vendor', TaxEntityController::class);

Route::get('/admin/employees', [UserController::class, 'index'])->name('master/employees.index');
Route::get('/admin/employees/list', [EmployeeController::class, 'getListing'])->name('employees.listing');

Route::get('/admin/users', [UserController::class, 'index'])->name('admin/users.index');
Route::get('/admin/users/list', [UserController::class, 'getListing'])->name('users.get');

Route::get('/admin/roles', [UserController::class, 'index'])->name('roles.index');
Route::get('/admin/roles/list', [UserController::class, 'getUsers'])->name('roles.get');



