<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicalController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('index');
Route::get('/medical/presentation/{id}', [MedicalController::class, 'presentation'])->name('medical.presentation');
Route::get('/medical/presentation/info/{id}', [MedicalController::class, 'medicalInfo'])->name('medical.info');
Route::get('/medical/presentation/events/{id}', [MedicalController::class, 'medicalEvents'])->name('medical.events');
Route::get('/medical/presentation/events/detail/{id}', [MedicalController::class, 'medicalEventDetail'])->name('medical.event.detail');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/events', [EventController::class, 'index'])->name('events.index');
    Route::get('/events/show/{id}', [EventController::class, 'show'])->name('events.show');



    Route::get('/medicals', [MedicalController::class, 'index'])->name('medicals.index');
    Route::post('/medicals/store', [MedicalController::class, 'store'])->name('medicals.store');
    Route::post('/medicals/update', [MedicalController::class, 'update'])->name('medicals.update');
    Route::post('/medicals/delete', [MedicalController::class, 'delete'])->name('medicals.delete');

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
    Route::post('/admin/update', [AdminController::class, 'update'])->name('admin.update');
    Route::post('/admin/delete', [AdminController::class, 'delete'])->name('admin.delete');
});

require __DIR__.'/auth.php';
