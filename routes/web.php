<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

   Route::group(['prefix'=>'admin','middleware'=>['isAdmin','auth']],function (){
   Route::get('dashboard',[\App\Http\Controllers\AdminController::class,'index'])->name('admin.dashboard');
   Route::get('/cars',[\App\Http\Controllers\AdminController::class,'cars']);
   Route::get('/edit_car/{id}',[\App\Http\Controllers\AdminController::class,'editCar']);
   Route::get('/models/{id}',[\App\Http\Controllers\AdminController::class,'models']);
   Route::get('/edits/{id}',[\App\Http\Controllers\AdminController::class,'edits']);
   Route::get('/view/{id}',[\App\Http\Controllers\AdminController::class,'viewCar']);
   Route::delete('delete-car/{id}',[\App\Http\Controllers\AdminController::class,'deleteCar']);
   Route::post('/add-cars',[\App\Http\Controllers\AdminController::class,'addCars']);
   Route::post('/update-cars/{id}',[\App\Http\Controllers\AdminController::class,'updateCars']);
   Route::get('/logout',[\App\Http\Controllers\AdminController::class,'logout']);
   Route::get('/brand',[\App\Http\Controllers\BrandController::class,'index']);
   Route::get('/model',[\App\Http\Controllers\ModelController::class,'index']);
   Route::post('/add_brand',[\App\Http\Controllers\BrandController::class,'addBrand']);
   Route::post('/add_model',[\App\Http\Controllers\ModelController::class,'addModel']);

});

     Route::group(['prefix'=>'user','middleware'=>['isUser','auth']],function (){
     Route::get('dashboard',[\App\Http\Controllers\UserController::class,'index'])->name('user.dashboard');
     Route::get('/brands/{id}',[\App\Http\Controllers\UserController::class,'brands']);
     Route::get('/models/{id}',[\App\Http\Controllers\UserController::class,'models']);




});
