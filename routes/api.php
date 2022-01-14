<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/post', [postController::class,'index']);
Route::post('/posts', [postController::class,'store']);
Route::get('/post/{id}', [postController::class,'show']);
Route::put('/post/{id}', [postController::class,'update']);
Route::delete('/post/{id}', [postController::class,'destroy']);

Route::get('/search/{name}', [postController::class,'search']);

