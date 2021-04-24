<?php

use App\Http\Controllers\Backend\GalleryController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Backend\StaffManageController;
use App\Http\Controllers\Backend\manageFoodController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\staffController;

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
//frontend

Route::get('/',[HomeController::class,'home'])->name('homepage');
Route::get('/homepage',[HomeController::class,'home'])->name('homepage');
Route::get('/viewStaff',[staffController::class,'viewStaff'])->name('viewStaff');




//backend

Route::get('/adminPanel',[UserController::class,'login'])->name('login');
//authentication
Route::post('/authenticate',[UserController::class,'authenticate'])->name('authenticate');

//home panel
Route::get('/logout', [UserController::class, 'logout'])->name('logout');


// Route::get('/adminPanel', function () {
//     return view('backend.partial.main');
// });

//Staff Route
Route::get('/staffManage',[StaffManageController::class,'staffManage'])->name('staff');
Route::post('/CreateStaffManage',[StaffManageController::class,'staffCreate'])->name('staffCreate');
Route::get('/staffDelete/{id}',[StaffManageController::class,'staffDelete'])->name('staffDelete');


//FoodItem Route

Route::get('/foodItemManage',[manageFoodController::class,'foodItemManage'])->name('foodItem');
Route::post('/CreateFoodItemManage',[manageFoodController::class,'foodItemCreate'])->name('foodItemCreate');
Route::get('/foodItemDelete/{id}',[manageFoodController::class,'foodItemDelete'])->name('foodItemDelete');

//Gallery
Route::get('/galleryManage',[GalleryController::class,'galleryManage'])->name('gallery');
Route::post('/galleryCreate',[GalleryController::class,'galleryCreate'])->name('galleryCreate');
Route::get('/galleryDelete/{id}',[GalleryController::class,'galleryDelete'])->name('galleryDelete');


