<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\EmployeeController;

Route::get('/', [ViewController::class, 'viewHomepage'])->name('viewHomepage');
Route::get('/viewEmployee', [ViewController::class, 'viewEmployee'])->name('viewEmployee');
Route::get('/addEmployee', [ViewController::class, 'viewAddEmployee'])->name('viewAddEmployee');
Route::get('/editEmployee/{id}', [ViewController::class, 'viewEditEmployee'])->name('viewEditEmployee');

// Emplouee
Route::post('/addEmployee', [EmployeeController::class, 'addEmployee'])->name('addEmployee');
Route::put('/editEmployee/{id}', [EmployeeController::class, 'editEmployee'])->name('editEmployee');
Route::delete('/deleteEmployee/{id}', [EmployeeController::class, 'deleteEmployee'])->name('deleteEmployee');
