<?php

use App\Http\Controllers\Backend\AdminOrderController;
use App\Http\Controllers\Backend\GalleryController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Backend\StaffManageController;
use App\Http\Controllers\Backend\manageFoodController;
use App\Http\Controllers\Backend\ReservationController as BackendReservationController;
use App\Http\Controllers\Backend\TableManageController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\staffController;
use App\Http\Controllers\Frontend\TableReservationController;
use App\Http\Controllers\Frontend\ViewGalleryController;
use App\Http\Controllers\Frontend\ViewReservationController;
use App\Http\Controllers\Frontend\ViewUserController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\FoodItemMenuController;
use App\Http\Controllers\Frontend\OrderController;

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

// food item menu
Route::get('/foodItemMenu',[FoodItemMenuController::class,'foodItemMenu'])->name('foodItemMenu');
// Route::get('/foodItem',[FoodItemMenuController::class,'foodItem'])->name('foodItem');


// see more food item menu
Route::get('/allFoodItemMenu',[HomeController::class,'allFoodItemMenu'])->name('allFoodItemMenu');

// view food Details
Route::get('/viewFood/{id}',[HomeController::class,'viewFood'])->name('viewFood');





// show staff
Route::get('/viewStaff',[staffController::class,'viewStaff'])->name('viewStaff');
// see more staff
Route::get('/allStaffView',[HomeController::class,'allStaffView'])->name('allStaffView');



//Gallery view
Route::get('/viewGallery',[ViewGalleryController::class,'viewGallery'])->name('viewGallery');
// see more gallery
Route::get('/viewMoreGallery',[HomeController::class,'viewMoreGallery'])->name('viewMoreGallery');

// Table Reservation see nav
// problem
Route::get('/showTableReservation',[TableReservationController::class,'showTableReservation'])->name('showTableReservation');


//frontend user login

Route::get('/login-registration',[ViewUserController::class,'viewLoginRegistration'])->name('login.registration.from');
Route::get('/userRegistration',[ViewUserController::class,'userRegistration'])->name('userRegistration');
Route::get('/goUserLogin',[ViewUserController::class,'goUserLogin'])->name('goUserLogin');


// Customer Reservation
// problem
Route::get('/view/tableReservation/{id}',[ViewReservationController::class,'tableReservation'])->name('tableReservation');
Route::post('/reservation/{id}',[ViewReservationController::class,'reservation'])->name('reservation');

// Cart
Route::get('/add-to-cart/{id}',[CartController::class,'addToCart'])->name('addToCart');
Route::get('carts',[CartController::class,'index'])->name('carts');
// msg for no chose cart
Route::get('/sorryMsg',[CartController::class,'sorryMsg'])->name('sorryMsg');
//  cart updated
Route::post('/updateCart/{id}',[CartController::class,'updateCart'])->name('updateCart');



// Order Info
Route::get('/order',[OrderController::class,'order'])->name('order');
// order confirm
Route::post('/orderConfirm',[OrderController::class,'orderConfirm'])->name('orderConfirm');

// user Profile
Route::get('/userProfile',[viewUserController::class,'userProfile'])->name('userProfile');




// profile data show



//user login
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

//AdminPanel.staff Edit
Route::get('/staffEdit/{id}',[StaffManageController::class,'staffEdit'])->name('staffEdit');

//AdminPanel.staff.Update
Route::post('/staffUpdate/{id}',[StaffManageController::class,'staffUpdate'])->name('staffUpdate');





//FoodItem Route

Route::get('/foodItemManage',[manageFoodController::class,'foodItemManage'])->name('foodItem');
Route::post('/CreateFoodItemManage',[manageFoodController::class,'foodItemCreate'])->name('foodItemCreate');
Route::get('/foodItemDelete/{id}',[manageFoodController::class,'foodItemDelete'])->name('foodItemDelete');
Route::get('/foodItemStatus/{id}/{status}', [manageFoodController::class, 'foodItemUpdate'])->name('foodItemUpdate');



//Gallery
Route::get('/galleryManage',[GalleryController::class,'galleryManage'])->name('gallery');
Route::post('/galleryCreate',[GalleryController::class,'galleryCreate'])->name('galleryCreate');
Route::get('/galleryDelete/{id}',[GalleryController::class,'galleryDelete'])->name('galleryDelete');



//manage table


Route::get('/tableManage',[TableManageController::class,'tableManage'])->name('table');
Route::post('/tableCreate',[TableManageController::class,'tableCreate'])->name('tableCreate');
Route::get('/tableDelete/{id}',[TableManageController::class,'tableDelete'])->name('tableDelete');
Route::get('/tableShowHide/{id}/{status}', [TableManageController::class, 'tableShowHide'])->name('tableShowHide');


// reservation table

Route::get('/showReservation',[BackendReservationController::class,'showReservation'])->name('showReservation');

// order confirm admin
Route::get('/adminOrder',[AdminOrderController::class,'adminOrder'])->name('adminOrder');

// order confirm accepted
// Route::get('/orderAccept/{id}/{status}',[AdminOrderController::class,'orderAccept'])->name('orderAccept');
// admin order view admin
Route::get('/adminOrderView/{id}',[AdminOrderController::class,'adminOrderView'])->name('adminOrderView');
//paid status
Route::get('/orderPaid/{id}/{status}',[AdminOrderController::class,'orderPaid'])->name('orderPaid');


});

});
