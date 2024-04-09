<?php

use App\Http\Controllers\PersonController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PostController;
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
// Route::get('people',[PersonController::class,'getInfor']);
Route::get('posts',[PostController::class,'getPost']);
Route::put('students',[StudentController::class,'updateFirstRow']);
Route::delete('students/delete',[StudentController::class,'deleteRow26']);
Route::get('students',[StudentController::class,'getStudentsFromPhnomPenhOlderThan20']);