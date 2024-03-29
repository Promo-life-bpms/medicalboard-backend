<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/checkin', [APIController::class, 'checkin'])->name('api.checkin');
Route::post('/ios/checkin', [APIController::class, 'iosCheckin'])->name('api.iosCheckin');

Route::get('/month-events', [APIController::class, 'monthEvents'])->name('api.monthEvents');

