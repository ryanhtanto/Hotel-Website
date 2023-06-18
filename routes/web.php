<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HotelDetailController;
use App\Http\Controllers\BookingFormController;
use App\Http\Controllers\LoginSignupController;
use App\Http\Controllers\BookingHistoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('home', [HomeController::class, 'index']);

Route::get('hotels', [HotelController::class, 'index']);

Route::get('hotel_detail/{id}', [HotelDetailController::class, 'index']);

Route::post('availability_check', [HotelDetailController::class, 'availability_check']);

Route::get('booking_form', [BookingFormController::class, 'index']);

Route::post('confirm_booking', [BookingFormController::class, 'confirm_booking']);

Route::get('cancel_booking', [BookingFormController::class, 'cancel_booking']);

Route::get('login_signup', [LoginSignupController::class, 'index']);

Route::post('addUser', [LoginSignupController::class, 'addUser']);

Route::post('user_login', [LoginSignupController::class, 'user_login']);

Route::get('logout', function(){
    if(session()->has('user')){
        session()->pull('user');
        session()->flush();
    }
    return redirect('home');
});

Route::view('about_us', 'about_us');

Route::get('booking_history', [BookingHistoryController::class, 'index']);

Route::get('admin_crud', [AdminController::class, 'index']);

Route::get('delete/{id}', [AdminController::class, 'delete_hotel']);

Route::get('admin_edit/{id}', [AdminController::class, 'edit_index']);

Route::post('hotel_edit', [AdminController::class, 'hotel_edit']);

Route::get('add_hotel_index', [AdminController::class, 'add_hotel_index']);

Route::post('add_hotel', [AdminController::class, 'add_hotel']);

Route::get('add_location_index', [AdminController::class, 'add_location_index']);

Route::post('add_location', [AdminController::class, 'add_location']);

Route::get('add_carousel_index', [AdminController::class, 'add_carousel_index']);

Route::post('add_carousel', [AdminController::class, 'add_carousel']);

Route::get('profile', [ProfileController::class, 'index']);

Route::post('edit_profile', [ProfileController::class, 'edit_profile']);

