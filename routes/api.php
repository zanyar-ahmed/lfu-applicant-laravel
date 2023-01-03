<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\DepramentsController;
use App\Http\Controllers\GraduwationRequirementController;
use App\Http\Controllers\GraduationRoundsController;
use App\Http\Controllers\GraduationApplicantsController;

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

// login and regster 
Route::post('register', [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login']);
//Route::post('posts', [PostController::class, 'store']);
Route::post('addapplicant',  [ApplicantController::class, 'store']);
//Route::get('delete',  [ApplicantController::class, 'destroy']);
//Route::get('getapplicant',  [ApplicantController::class, 'index']);// pangantion
//Route::get('getapplicant',  [ApplicantController::class, 'index']);// pangantion
//Route::apiResource('posts', ApplicantController::class);

//ApplicantController
//Route::post('adddepartment',  [DepramentsController::class, 'store']);
Route::get('getdepartment',  [DepramentsController::class, 'index']);
//
//
//Route::post('addgraduationreq',  [GraduwationRequirementController::class, 'store']);
Route::get('getgraduationreq',  [GraduwationRequirementController::class, 'index']);
//
Route::post('addgraduationround',  [GraduationRoundsController::class, 'store']);
Route::get('getgraduationround',  [GraduationRoundsController::class, 'index']);
//
Route::post('addgraduationapplicant', [GraduationApplicantsController::class, 'store']);
Route::get('getgraduationapplicant',  [GraduationApplicantsController::class, 'index']);
///

Route::apiResource('apllicants', ApplicantController::class)->middleware('auth:api');
Route::apiResource('departments', DepramentsController::class)->middleware('auth:api');
Route::apiResource('graduationreq', GraduwationRequirementController::class)->middleware('auth:api');
Route::apiResource('graduationround', GraduationRoundsController::class)->middleware('auth:api');
Route::apiResource('graduationapplicant', GraduationApplicantsController::class)->middleware('auth:api');
//Route::apiResource('apllicants', ApplicantController::class)->middleware('auth:api');

//Route::post('addapplicant',  [PostController::class, 'store']);
//Route::resource('posts', PostController::class);
Route::middleware('auth:api')->group(function () {
  // Route::get('getapplicant',  [ApplicantController::class, 'index']);
   //Route::get('getapplicantbyid',  [ApplicantController::class, 'show']);
  // Route::resource('products', [ApplicantController::class]);

});