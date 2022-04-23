<?php


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
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


//Admin Route list
Route::get('/admin',[AdminController::class , 'index'])->name('admin');
Route::post('/admin',[AdminController::class , 'store']);

//Permission Route list
Route::get('/permission',[PermissionController::class , 'index'])->name('permission');
Route::get('/per',[PermissionController::class , 'per']);
Route::post('/permission',[PermissionController::class , 'store']);
Route::delete('/permission/{id}',[PermissionController::class , 'destroy']);

//Role Route list
Route::get('/role',[RoleController::class ,'index']);
Route::post('/role',[RoleController::class , 'store']);


