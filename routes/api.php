<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ApplicantController;

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

Route::post('register', [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login']);
//Route::post('posts', [PostController::class, 'store']);
Route::post('addapplicant',  [ApplicantController::class, 'store']);
Route::get('getapplicant',  [ApplicantController::class, 'index']);
Route::post('adddepartment',  [DepartmentController::class, 'store']);

//Route::post('addapplicant',  [PostController::class, 'store']);
Route::resource('posts', PostController::class);
Route::middleware('auth:api')->group(function () {
    Route::resource('posts', PostController::class);
});