<?php

use Illuminate\Http\Request;
use App\Http\Controllers\TaskController;
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

// Get list of tasks
Route::get('/get_list_of_tasks', [TaskController::class, 'index']);

// Create new task
Route::post('task', [TaskController::class, 'store']);

// Get single task
Route::get('task/{task}', [TaskController::class, 'show']);

// Update task
Route::put('task/{task}', [TaskController::class, 'update']);

// Delete single task
Route::delete('task/{task}', [TaskController::class, 'destroy']);