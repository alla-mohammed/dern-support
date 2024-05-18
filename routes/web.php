<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatgoryController;
use App\Http\Controllers\ServiceController;

use App\Http\Controllers\RequstController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.register');
});




Route::get('/home',[AdminController::class,'index']);

//all catgories
Route::get('/category',[CatgoryController::class, 'index']);

//create catgory
Route::get('/add-catgory',[CatgoryController::class, 'create']);
Route::post('/add-catgory',[CatgoryController::class, 'insert']);

// get one catgory
Route::get('/show/{id}',[CatgoryController::class, 'show']);

//update catgory
Route::get('/form-update/{id}',[CatgoryController::class, 'edit']);
Route::put('/update-catgory/{id}',[CatgoryController::class, 'update']);

//delete catgory
Route::delete('/form-delete/{id}',[CatgoryController::class, 'destroy']);


//show all services
Route::get('/services',[ServiceController::class, 'index']);


//create service
Route::get('/add-service',[ServiceController::class, 'create']);
Route::post('/add-service',[ServiceController::class, 'insert']);

// get one service
Route::get('/show-service/{id}',[ServiceController::class, 'show']);

//update service
Route::get('/service-edit/{id}',[ServiceController::class, 'edit']);
Route::put('/update-service/{id}',[ServiceController::class, 'update']);

//delete service
Route::delete('/form-delete/{id}',[ServiceController::class, 'destroy']);

// Route::get('/dashboard',[CatgoryController::class, 'index_user']);

Route::get('/dashboard',[ServiceController::class, 'index_user']);


//request
Route::get('/form-request/{id}',[RequstController::class, 'create']);
Route::post('/form-request',[RequstController::class, 'storee']);
Route::get('/requsts',[RequstController::class, 'index']);
Route::delete('/requsts-delete/{id}',[RequstController::class, 'destroy']);

Route::get('/requsts-update-form/{id}',[RequstController::class, 'edit']);
Route::put('/update-requsts/{id}',[RequstController::class, 'update']);