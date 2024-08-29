<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DepartmentController;

// Route::get('/', function () {
//     return view('views.departments.index');
// });

Route::get('/', function () {
    return view('welcome');
});




Route::get('/departments/action', [DepartmentController::class, 'handleAction'])->name('departments.action');
Route::get('/departments/add', [DepartmentController::class, 'create'])->name('departments.create');
Route::get('/departments/list', [DepartmentController::class, 'index'])->name('departments.index');
Route::get('/departments/{id}', [DepartmentController::class, 'show'])->name('departments.show');
Route::post('/departments', [DepartmentController::class, 'store'])->name('departments.store');


// // Route::namespace($this->namespace)->group(function () {
// //     Route::get('/departments/{id}', 'DepartmentController@show')->name('departments.show');
// //     Route::post('/departments/{id}/generate-pdf', 'DepartmentController@generatePDF')->name('departments.generatePDF');
// // });

// Route::get('/', [DepartmentController::class, 'index']);
// Route::get('/departments/{id}', [DepartmentController::class, 'show']);
// Route::post('/departments/{id}/generate-pdf', [DepartmentController::class, 'generatePDF']);
