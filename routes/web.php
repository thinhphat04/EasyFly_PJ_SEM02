<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\UserController;

Route::get('/flights', [ProjectController::class, 'todayflights'])->name('todayflights');
Route::get('/', [ProjectController::class, 'index'])->name('index');
Route::get('/about', [ProjectController::class, 'about'])->name('about');
Route::get('/contact', [ProjectController::class, 'contact'])->name('contact');
Route::get('/blog-details', [ProjectController::class, 'blogdetails'])->name('blog-details');
Route::get('/blog', [ProjectController::class, 'blog'])->name('blog');

Route::get('register', [RegisterController::class, 'index']);
Route::post('register', [RegisterController::class, 'store'])->name('register');

Route::get('login', [LoginController::class, 'login']);
Route::post('login', [LoginController::class, 'store'])->name('login');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('home', [LoginController::class, 'home'])->name('home');

Route::get('forget-password', [ForgotPasswordController::class, 'getEmail'])->name('password.request');
Route::post('forget-password', [ForgotPasswordController::class, 'postEmail'])->name('password.email');

Route::get('userlogout', [LoginController::class, 'userlogout'])->name('userlogout');

Route::get('reset-password/{token}', [ResetPasswordController::class, 'getPassword'])->name('password.reset');
Route::post('reset-password', [ResetPasswordController::class, 'updatePassword'])->name('password.update');
Route::get('/admin', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('isAdmin');
#Admin

Route::prefix('/admin/airport')->middleware('isAdmin')->group(function () {
    #airport
    Route::get('/', [AdminController::class, 'sanbay'])->name('sanbay');
    Route::post('/search', [AdminController::class, 'searchairport'])->name('searchairport');
    #them
    Route::get('/add', [AdminController::class, 'sb_add'])->name('sb_add');
    Route::post('/addprocess', [AdminController::class, 'sb_addprocess'])->name('sb_addprocess');
    #update
    Route::get('/update/{code}', [AdminController::class, 'sb_update'])->name('sb_update');
    Route::post('/updateprocess/{code}', [AdminController::class, 'sb_updateprocess'])->name('sb_updateprocess');
    #delete
    Route::get('/delete/{code}', [AdminController::class, 'sb_delete'])->name('sb_delete');
});

Route::prefix('/admin/flight')->middleware('isAdmin')->group(function () {
    #flight
    Route::get('/', [AdminController::class, 'flight'])->name('flight');
    Route::post('/search', [AdminController::class, 'searchflight'])->name('searchflightadmin');
    #them
    Route::get('/add', [AdminController::class, 'flight_add'])->name('flight_add');
    Route::post('/addprocess', [AdminController::class, 'flight_addprocess'])->name('flight_addprocess');
    #update
    Route::get('/update/{code}', [AdminController::class, 'flight_update'])->name('flight_update');
    Route::post('/updateprocess/{code}', [AdminController::class, 'flight_updateprocess'])->name('flight_updateprocess');
    #delete
    Route::get('/delete/{code}', [AdminController::class, 'flight_delete'])->name('flight_delete');
});

Route::prefix('/admin/feedback')->group(function () {
    #flight
    Route::get('/', [AdminController::class, 'feedback'])->name('feedback');
    Route::post('/search', [AdminController::class, 'searchfeedback'])->name('searchfeedback');
    #them
    Route::get('/add', [AdminController::class, 'feedback_add'])->name('feedback_add');
    Route::post('/addprocess', [AdminController::class, 'feedback_addprocess'])->name('feedback_addprocess');
    #update
    Route::get('/update/{code}', [AdminController::class, 'feedback_update'])->name('feedback_update');
    Route::post('/updateprocess/{code}', [AdminController::class, 'feedback_updateprocess'])->name('feedback_updateprocess');
    #delete
    Route::get('/delete/{code}', [AdminController::class, 'feedback_delete'])->name('feedback_delete');
});
// seat_class
Route::prefix('/admin/seatclass')->group(function () {
    #seatclass
    Route::get('/', [AdminController::class, 'seatclass'])->name('seatclass');
    Route::post('/search', [AdminController::class, 'searchseatclass'])->name('searchseatclass');
    #them
    Route::get('/add', [AdminController::class, 'seatclass_add'])->name('seatclass_add');
    Route::post('/addprocess', [AdminController::class, 'seatclass_addprocess'])->name('seatclass_addprocess');
    #update
    Route::get('/update/{code}', [AdminController::class, 'seatclass_update'])->name('seatclass_update');
    Route::post('/updateprocess/{code}', [AdminController::class, 'seatclass_updateprocess'])->name('seatclass_updateprocess');
    #delete
    Route::get('/delete/{code}', [AdminController::class, 'seatclass_delete'])->name('seatclass_delete');
});
// customer
Route::prefix('/admin/customer')->group(function () {
    #customer
    Route::get('/', [AdminController::class, 'customer'])->name('customer');
    Route::post('/search', [AdminController::class, 'searchcustomer'])->name('searchcustomer');
    #them
    Route::get('/add', [AdminController::class, 'customer_add'])->name('customer_add');
    Route::post('/addprocess', [AdminController::class, 'customer_addprocess'])->name('customer_addprocess');
    #update
    Route::get('/update/{code}', [AdminController::class, 'customer_update'])->name('customer_update');
    Route::post('/updateprocess/{code}', [AdminController::class, 'customer_updateprocess'])->name('customer_updateprocess');
    #delete
    Route::get('/delete/{code}', [AdminController::class, 'customer_delete'])->name('customer_delete');
    #search
    Route::post('/search', [AdminController::class, 'searchcustomer'])->name('searchcustomer');
});
// order(booking)
Route::prefix('/admin/order')->group(function () {
    #order
    Route::get('/', [AdminController::class, 'order'])->name('order');
    Route::post('/search', [AdminController::class, 'searchOrder'])->name('searchOrder');
    #them
    Route::get('/add', [AdminController::class, 'order_add'])->name('order_add');
    Route::post('/addprocess', [AdminController::class, 'order_addprocess'])->name('order_addprocess');
    #update
    Route::get('/update/{code}', [AdminController::class, 'order_update'])->name('order_update');
    Route::post('/updateprocess/{code}', [AdminController::class, 'order_updateprocess'])->name('order_updateprocess');
    #delete
    Route::get('/delete/{code}', [AdminController::class, 'order_delete'])->name('order_delete');
});
// ticket
Route::prefix('/admin/ticket')->group(function () {
    #ticket
    Route::get('/', [AdminController::class, 'ticket'])->name('ticket');
    Route::post('/search', [AdminController::class, 'searchticket'])->name('searchticket');
    #them
    Route::get('/add', [AdminController::class, 'ticket_add'])->name('ticket_add');
    Route::post('/addprocess', [AdminController::class, 'ticket_addprocess'])->name('ticket_addprocess');
    #update
    Route::get('/update/{code}', [AdminController::class, 'ticket_update'])->name('ticket_update');
    Route::post('/updateprocess/{code}', [AdminController::class, 'ticket_updateprocess'])->name('ticket_updateprocess');
    #delete
    Route::get('/delete/{code}', [AdminController::class, 'ticket_delete'])->name('ticket_delete');
});


//////////////////////////////////FlightController//////////////////////////////////////////
Route::post('/search', [FlightController::class, 'search'])->name('searchflight');
Route::post('/booking/{id}', [FlightController::class, 'booking'])->name('booking');
Route::post('/return',[FlightController::class,'return'])->name('return');
Route::get('/orderdetails/{code}',[UserController::class, 'order_details'])->name('order_details');   
Route::post('/process-booking', [FlightController::class, 'processBooking'])->name('processBooking');

///////////////////////////////// USER ////////////////////////////////////////////
Route::prefix('/user')->group(function () {
    Route::get('/', [UserController::class, 'dashboard'])->name('user')->middleware('auth');

    Route::get('/changepassword',[UserController::class, 'changepw'])->name('changepw');
    Route::post('/updatePassword',[UserController::class, 'updatePassword'])->name('updatePassword');
    Route::get('/ticket',[UserController::class, 'user_ticket'])->name('user_ticket');
    Route::get('/information', [UserController::class, 'information'])->name('information');
    Route::post('/updateInformation', [UserController::class, 'updateInformation'])->name('updateInformation');
    Route::get('/cancel-flight/{ticketId}', [UserController::class, 'cancelFlight'])->name('cancel.flight');

});

