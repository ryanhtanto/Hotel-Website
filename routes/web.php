<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConsolesController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;


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

//home page routes
Route::get('/', function () {
    return view('home', ['title'=>'Home', 'css'=>'home']);
});

Route::get('/home', function () {
    return view('home', ['title'=>'Home', 'css'=>'home']);
});

//sign up page routes
Route::get('/signup', [SignUpController::class, 'logged_in']);

//add user to db routes
Route::post('addUser', [SignUpController::class, 'addData']);

//admin page routes
Route::get('/admin', [AdminController::class, 'index']);
Route::get('admin/console_crud/{id}', [AdminController::class, 'console_crud']);
Route::get('admin/console_add/{id}', [AdminController::class, 'console_add_index']);
Route::post('add_console', [AdminController::class, 'console_add']);
Route::get('admin/console_delete/{id}', [AdminController::class, 'console_delete']);
Route::get('admin/console_edit/{id}', [AdminController::class, 'console_edit_index']);
Route::post('edit_console', [AdminController::class, 'console_edit']);
Route::get('admin/customer_order', [AdminController::class, 'order_index']);
Route::post('change_status/{id}', [AdminController::class, 'change_status'], );
Route::get('admin/add_game', [AdminController::class, 'addgame_index']);
Route::post('add_game', [AdminController::class, 'add_game']);

//login page routes
Route::get('/login', [LoginController::class, 'logged_in']);

//login authentication routes
Route::post('login_auth', [LoginController::class, 'user_auth']);

//logout routes
Route::get('logout', function(){
    if(session()->has('user')){
        session()->pull('user');
        session()->flush();
    }
    return redirect('home');
});

//about us page routes
Route::view('about_us', 'about_us', ['title'=> 'About Us', 'css'=>'about_us']);

// route for playstation
Route::get('/console/{console_name}', [ConsolesController::class, 'index']);
Route::get('/console_detail/{id_console}', [ConsolesController::class, 'detail']);

//route for cart
Route::get('/cart', [CartController::class, 'index']);
Route::post('add-to-cart', [ConsolesController::class, 'addToCart']);
Route::get('/remove/{id}', [ConsolesController::class, 'remove']);
Route::post('calculate_cart', [CartController::class, 'calculate_total']);
Route::get('checkout', [CartController::class, 'checkout']);

//route for order
Route::get('order', [OrderController::class, 'index']);
Route::get('req_pickup/{id}', [OrderController::class, 'pickup']);

