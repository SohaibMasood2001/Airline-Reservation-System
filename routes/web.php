<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FlightClassController;
use App\Http\Controllers\PaymentOptionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\AdminAddFlightController;
use Illuminate\Support\Facades\Auth;


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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', [AuthController::class, 'index'])->name('register');
Route::post('/registered',[AuthController::class, 'Register'] )->name('registered');

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/loginuser', [AuthController::class, 'loginPost'])->name('loginuser');
Route::get('/forgot-password', [AuthController::class, 'forget'])->name('forget');

// Route::get('/authentication', [AuthController::class, 'index'])->name('auth');/
Route::get('auth/facebook', [AuthController::class,'facebookRedirect']);
Route::get('auth/facebook/callback', [AuthController::class, 'loginWithFacebook']);

Route::get('auth/google', [AuthController::class,'googleRedirect']);
Route::get('auth/google/callback', [AuthController::class,'loginWithGoogle']);

//admin login

Route::get('admin/login', [AdminLoginController::class, 'index'])->name('adminlogin');
Route::post('admin/loginpost', [AdminLoginController::class, 'loginPost'])->name('admin_login_validate');
//admin register
Route::get('admin/register', [AdminRegisterController::class, 'index'])->name('adminregister');
Route::post('admin/registered', [AdminRegisterController::class, 'Register'])->name('adminregistered');
// auth ended her 

Route::post('/bookedflight', [BookingController::class, 'store'])->name('flight.book');
Route::get('airline/admin', [BookingController::class, 'show'])->name('flight.show');
Route::get('airline/admin/edit/{id}',[BookingController::class, 'edit' ])->name('flight.edit');
Route::post('airline/admin/update/{id}',[BookingController::class, 'update' ])->name('flight.update');
Route::get('airline/admin/delete/{id}', [BookingController::class, 'delete']);


Route::get('airline/admin/addflight', [AdminAddFlightController::class, 'index'])->name('flight_add_by_admin');
Route::post('airline/admin/addflight', [AdminAddFlightController::class, 'store'])->name('admin_add_flight');

Route::get('airline/admin/addclass', [FlightClassController::class, 'index'])->name('class_add_by_admin');
Route::post('airline/admin/addclass', [FlightClassController::class, 'store'])->name('admin_add_class');

Route::get('airline/admin/addflight/edit/{id}',[FlightClassController::class, 'edit' ]);
Route::post('airline/admin/addflight/update/{id}',[FlightClassController::class, 'update' ])->name('flightclass.update');
Route::get('airline/admin/addflight/delete/{id}', [FlightClassController::class, 'delete']);

Route::get('airline/admin/download', [BookingController::class,'download'])->name('reservations.download');
Route::get('/search', [FlightController::class, 'search'])->name('flights.search');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/flight_classes', [FlightClassController::class, 'index'])->name('flight_classes.index');
Route::get('/flight_classes/create', [FlightClassController::class, 'create'])->name('flight_classes.create');
Route::post('/flight_classes', [FlightClassController::class, 'store'])->name('flight_classes.store');
Route::resource('flights', FlightController::class);
Route::post('/search', [BookingController::class, 'searchData'])->name('search');
Route::get('/booking/flightsearch', function () {
    return view('booking.data');
});

Route::post('/booking/search', [BookingController::class, 'searchBookSeat'])->name('booking.search');
Route::get('/flight_class_list', function(){
return view('booking.flight_class_list');
})->name('class.flight');


//routes for payment
Route::get('checkout','App\Http\Controllers\CheckoutController@checkout');
Route::post('checkout','App\Http\Controllers\CheckoutController@afterpayment')->name('checkout.credit-card');

