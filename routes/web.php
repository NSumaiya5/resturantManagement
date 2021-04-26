<?php

use App\Http\Controllers\Backend\GalleryController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Backend\StaffManageController;
use App\Http\Controllers\Backend\manageFoodController;
use App\Http\Controllers\Backend\TableManageController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\staffController;
use App\Http\Controllers\Frontend\TableReservationController;
use App\Http\Controllers\Frontend\ViewGalleryController;
use App\Http\Controllers\Frontend\ViewUserController;

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
// show homepage
Route::get('/',[HomeController::class,'home'])->name('homepage');
// Route::get('/homepage',[HomeController::class,'home'])->name('homepage');

// show staff
Route::get('/viewStaff',[staffController::class,'viewStaff'])->name('viewStaff');
// see more staff
Route::get('/allStaffView',[HomeController::class,'allStaffView'])->name('allStaffView');



//Gallery view
Route::get('/viewGallery',[ViewGalleryController::class,'viewGallery'])->name('viewGallery');
// see more gallery
Route::get('/viewMoreGallery',[HomeController::class,'viewMoreGallery'])->name('viewMoreGallery');

// Table Reservation see

Route::get('/tableReservation',[TableReservationController::class,'tableReservation'])->name('tableReservation');


//frontend user login

Route::get('/login-registration',[ViewUserController::class,'viewLoginRegistration'])->name('login.registration.from');
Route::get('/userRegistration',[ViewUserController::class,'userRegistration'])->name('userRegistration');
Route::get('/goUserLogin',[ViewUserController::class,'goUserLogin'])->name('goUserLogin');







Route::group(['prefix'=>'LoginUser'],function (){

Route::post('/registration',[ViewUserController::class,'registration'])->name('registration');
Route::post('/userLogin',[ViewUserController::class,'userLogin'])->name('userLogin');
Route::get('/userLogout',[ViewUserController::class,'userLogout'])->name('userLogout');


// Route::group(['middleware'=>'LoginUser-auth'],function (){


// });

});






//backend

Route::group(['prefix'=>'admin'],function (){


Route::get('/adminPanel',[UserController::class,'login'])->name('admin.login');
//authentication
Route::post('/doLogin',[UserController::class,'doLogin'])->name('admin.doLogin');


Route::group(['middleware'=>'admin-auth'],function (){

//home panel
Route::get('/logout', [UserController::class, 'logout'])->name('admin.logout');


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



//manage table


Route::get('/tableManage',[TableManageController::class,'tableManage'])->name('table');
Route::post('/tableCreate',[TableManageController::class,'tableCreate'])->name('tableCreate');
Route::get('/tableDelete/{id}',[TableManageController::class,'tableDelete'])->name('tableDelete');



});

});
