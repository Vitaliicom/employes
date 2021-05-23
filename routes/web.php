<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployesController;

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

Route::get('/', [EmployesController::class,'index']);
Route::get('/employes', [EmployesController::class,'index'])->name('employees');
Route::get('/employes/{department_id}', [EmployesController::class,'showDepartment'])->name('department');
