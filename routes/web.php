<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [EmployeeController::class, 'index'])->name('emp.show');
Route::get('/create',[EmployeeController::class, 'create'])->name('emp.create');
Route::post('/store',[EmployeeController::class, 'store'])->name('emp.store');
Route::get('/user/{id}',[EmployeeController::class, 'singleUser'])->name('view.user');