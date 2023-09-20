<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tcms\MeterValidation\Api\MeterValidateApi;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//meter number validation
Route::middleware(['throttle:5,1'])->group(function () {
    // This route allows up to 5 requests per minute (adjust as needed).
    Route::post('/meter', [MeterValidateApi::class, 'getValidMeter']);
});





//Route::post('/meter', [MeterValidateApi::class ,'getValidMeter']); //tanesco api
