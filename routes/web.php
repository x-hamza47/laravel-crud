<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [EmployeeController::class, 'index'])->name('emp.show');
Route::get('/create',[EmployeeController::class, 'create'])->name('emp.create');
Route::post('/store',[EmployeeController::class, 'store'])->name('emp.store');
Route::get('/user/{id}',[EmployeeController::class, 'singleUser'])->name('view.user');
Route::get('/edit/{id}', [EmployeeController::class, 'editUser'])->name('emp.edit');
Route::put('/update/{id}',[EmployeeController::class, 'update'])->name('emp.update');
Route::get('/delete/{id}', [EmployeeController::class, 'destroy'])->name('emp.delete');