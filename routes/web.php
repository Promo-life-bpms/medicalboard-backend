<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
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
Route::get('/medical/info/{id}', [MedicalController::class, 'presentation'])->name('medical.presentation');
Route::get('/medical/info/about/{id}', [MedicalController::class, 'medicalInfo'])->name('medical.info');
Route::get('/medical/info/events/{id}', [MedicalController::class, 'medicalEvents'])->name('medical.events');
Route::get('/medical/info/events/detail/{id}', [MedicalController::class, 'medicalEventDetail'])->name('medical.event.detail');

Route::get('/testdata', [TestController::class, 'data'])->name('test');

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/events', [EventController::class, 'index'])->name('events.index');
    Route::get('/events/show/{id}', [EventController::class, 'show'])->name('events.show');
    Route::post('/event/create',[EventController::class,'create'])->name('events.create');
    Route::post('/event/edit',[EventController::class,'edit'])->name('events.edit');
    Route::post('event/delete',[EventController::class, 'delete'])->name('events.delete');
    Route::post('user/event/add',[EventController::class, 'AddUserofEvent'])->name('user.event');
    
    Route::get('/medicals', [MedicalController::class, 'index'])->name('medicals.index');
    Route::post('/medicals/store', [MedicalController::class, 'store'])->name('medicals.store');
    Route::post('/medicals/update', [MedicalController::class, 'update'])->name('medicals.update');
    Route::post('/medicals/delete', [MedicalController::class, 'delete'])->name('medicals.delete');
    

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
    Route::post('/admin/update', [AdminController::class, 'update'])->name('admin.update');
    Route::post('/admin/delete', [AdminController::class, 'delete'])->name('admin.delete');

    Route::post('/stadistics', [EventController::class, 'stadistics'])->name('admin.event.stadistics');

    Route::post('/import/users', [AdminController::class, 'importUsers'])->name('import.users');
});

require __DIR__.'/auth.php';
