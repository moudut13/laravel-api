<?php


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Tags\TagsController;
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


//User Route list
Route::get('/customer',[CustomerController::class , 'index'])->name('Customer');
Route::post('/customer',[CustomerController::class , 'store'])->name('Customer');
Route::get('/customer/{id}',[CustomerController::class , 'show']);
Route::delete('/customer/{id}',[CustomerController::class , 'destroy']);


//Permission Route list
Route::get('/permission',[PermissionController::class , 'index'])->name('permission');
Route::get('/per',[PermissionController::class , 'per']);
Route::post('/permission',[PermissionController::class , 'store']);
Route::delete('/permission/{id}',[PermissionController::class , 'destroy']);

//Role Route list
Route::get('/role',[RoleController::class ,'index']);
Route::post('/role',[RoleController::class , 'store']);


//Tags Route list
Route::get('/tags',[TagsController::class ,'index']);
Route::post('/tags',[TagsController::class , 'store']);
Route::delete('/tags/{id}',[TagsController::class , 'destroy']);

//Category Route list
Route::get('/category',[CategoryController::class ,'indexFirst']);
Route::delete('/category/{id}',[CategoryController::class ,'destroy']);


