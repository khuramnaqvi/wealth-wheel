<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });





//add user balance


// Route::post('payment', [App\Http\Controllers\PayPalController::class, 'payment'])->name('payment');
// Route::get('cancel', [App\Http\Controllers\PayPalController::class, 'cancel'])->name('payment.cancel');
// Route::get('payment/success', [App\Http\Controllers\PayPalController::class, 'success'])->name('payment.success');

//Routes For User
Route::get('/', [App\Http\Controllers\UserController::class, 'user'])->name('user_home');
Route::get('/products', [App\Http\Controllers\UserController::class, 'products'])->name('products');
Route::get('/about', [App\Http\Controllers\UserController::class, 'about'])->name('about');
Route::get('/faq', [App\Http\Controllers\UserController::class, 'faq'])->name('faq');
Route::get('/contact', [App\Http\Controllers\UserController::class, 'contact'])->name('contact');
Route::get('/how_it_works', [App\Http\Controllers\UserController::class, 'how_it_works'])->name('how_it_works');

//Term & conditions data Routes
Route::get('/faq', [App\Http\Controllers\UserController::class, 'faq'])->name('faq');
Route::get('/privacy_policy', [App\Http\Controllers\UserController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/term_and_conditions', [App\Http\Controllers\UserController::class, 'term_and_conditions'])->name('term_and_conditions');

Route::get('/availabe_wealth_wheel', [App\Http\Controllers\UserController::class, 'availabe_wealth_wheel'])->name('availabe_wealth_wheel');

//Routes For Admin

Auth::routes();
Route::group(['middleware' => ['auth', 'admin']], function () {
Route::get('/dashboard', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard');
// Routes for user crud
Route::get('/users', [App\Http\Controllers\DashboardController::class, 'users'])->name('users');
Route::get('create', [App\Http\Controllers\DashboardController::class, 'create'])->name('create');
Route::post('save', [App\Http\Controllers\DashboardController::class, 'save'])->name('save');
Route::get('edit/{user}', [App\Http\Controllers\DashboardController::class, 'edit'])->name('edit');
Route::post('update/{user}', [App\Http\Controllers\DashboardController::class, 'update'])->name('update');
Route::get('delete/{user}', [App\Http\Controllers\DashboardController::class, 'delete'])->name('delete'); 
// Routes for wheel
Route::get('/wheels', [App\Http\Controllers\Admin\WheelController::class, 'wheels'])->name('wheels');
Route::get('delete_wheel/{wheel}', [App\Http\Controllers\DashboardController::class, 'delete_wheel']);
Route::get('edit_wheel/{wheel}', [App\Http\Controllers\DashboardController::class, 'edit_wheel'])->name('edit_wheel');
Route::post('update_wheel/{wheel}', [App\Http\Controllers\DashboardController::class, 'update_wheel'])->name('update_wheel');

});

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
//user routes
Route::group(['middleware' => ['auth', 'user']], function () {  
 Route::get('/wealth_wheel', [App\Http\Controllers\Admin\WheelController::class, 'wealth_wheel'])->name('wealth_wheel');
Route::post('/add_user_balance', [App\Http\Controllers\UserController::class, 'add_user_balance'])->name('add_user_balance');

// Routes for paypal
Route::post('charge', [App\Http\Controllers\PaymentController::class, 'charge'])->name('charge');
Route::get('success', [App\Http\Controllers\PaymentController::class, 'success'])->name('success');
Route::get('error', [App\Http\Controllers\PaymentController::class, 'error'])->name('error');

//Routes For wheels
Route::post('/create_wealth_wheel', [App\Http\Controllers\Admin\WheelController::class, 'create_wealth_wheel'])->name('create_wealth_wheel');
Route::get('/wheels_details', [App\Http\Controllers\UserController::class, 'wheels_details'])->name('wheels_details');



// Routes for Stripe
Route::get('stripe/{amount}', [App\Http\Controllers\StripePaymentController::class, 'stripe'])->name('stripe');
Route::post('stripe_post', [App\Http\Controllers\StripePaymentController::class, 'stripePost'])->name('stripe_post');


});


