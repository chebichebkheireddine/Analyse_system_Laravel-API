<?php

use App\Http\Controllers\Api\V1\AnalyseController;
use App\Http\Controllers\Api\V1\LabController;
use App\Models\Analyse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Call router to The api
// It be like //  api/v1
Route::group(['prefix'=>'v1','namespace'=>'App\Http\Controllers\Api\V1'],function(){
Route::apiResource('Labs\{nameLabe}',LabController::class);
Route::apiResource('Analyses',AnalyseController::class);
});
