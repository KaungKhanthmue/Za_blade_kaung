<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_function;
use App\Http\Controllers\C1_function;
use App\Http\Controllers\logincontroller;


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
    return view('welcome');
});

// index company
Route::get('/comlist', [C_function::class, 'indexcom']);;
//creat company
Route::get('/comcreate',[C_function::class, 'createcom']);
Route::post('/savecom', [C_function::class, 'okpar']);
//store company  
Route::get('/comstore/{id}',[C_function::class,'storecom']); 
Route::post('/updatesavecom/{id}', [C_function::class, 'scom']);
// destory company
Route::get('/comdelete/{id}', [C_function::class, 'destorycom']);
// login company
Route::get('/comlogin',[logincontroller::class, 'one']);
Route::post('/developercom',[logincontroller::class, 'iamone']);


// index employees 
Route::get('/emplist',[C1_function::class, 'indexemp']);
//create employess 
Route::get('/empcreate',[C1_function::class, 'createemp']);
Route::post('/saveemp', [C1_function::class, 'okparone']);
//store employees
Route::get('/empstore/{id}',[C1_function::class,'storeemp']); 
Route::post('/updatesaveemp/{id}', [C1_function::class, 'semp']);
// destory employess 
Route::get('/empdelete/{id}', [C1_function::class, 'destoryemp']);
// login employees
Route::get('/emplogin',[logincontroller::class, 'two']);
Route::post('/developereemp',[logincontroller::class, 'iamtwo']);








