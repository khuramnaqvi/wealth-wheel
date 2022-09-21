<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/migratefresh/seed', function () {
    $run = Artisan::call('migrate:fresh --seed');
    return 'Completedd';
});


Route::get('/cls', function() {
    $run = Artisan::call('config:clear');
    $run = Artisan::call('cache:clear');
    $run = Artisan::call('config:cache');
    $run = Artisan::call('view:clear');
    Session::flush();
    return 'FINISHED';
});




//add user balance


// Route::post('payment', [App\Http\Controllers\PayPalController::class, 'payment'])->name('payment');
// Route::get('cancel', [App\Http\Controllers\PayPalController::class, 'cancel'])->name('payment.cancel');
// Route::get('payment/success', [App\Http\Controllers\PayPalController::class, 'success'])->name('payment.success');

//Routes For User
Route::get('/', [UserController::class, 'user'])->name('user_home');
Route::get('/register/success', [UserController::class, 'user']);
Route::get('/products', [UserController::class, 'products'])->name('products');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/faq', [UserController::class, 'faq'])->name('faq');
Route::get('/how_it_works', [UserController::class, 'how_it_works'])->name('how_it_works');

// Contact us
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::post('/contact_form', [UserController::class, 'contact_form'])->name('contact_form');



//Term & conditions data Routes
Route::get('/faq', [UserController::class, 'faq'])->name('faq');
Route::get('/privacy_policy', [UserController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/term_and_conditions', [UserController::class, 'term_and_conditions'])->name('term_and_conditions');

// reset password
Route::get('/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'reset'])->name('reset');
Route::post('/reset_form', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('reset_form');
Route::get('forget_password_link', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'forget_password_link'])->name('forget_password_link');


Route::get('reset-password/{token}', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');



//wheel
Route::get('/availabe_wealth_wheel', [UserController::class, 'availabe_wealth_wheel'])->name('availabe_wealth_wheel');


//product filter
Route::post('wheels_filter_form', [UserController::class, 'wheels_filter_form'])->name('wheels_filter_form');

Route::get('wheels_filter', [UserController::class, 'wheels_filter'])->name('wheels_filter');







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

// withraw
Route::get('/withdraw_request', [App\Http\Controllers\DashboardController::class, 'withdraw_request'])->name('withdraw_request');

Route::get('/aprove_withdraw/{id}', [App\Http\Controllers\DashboardController::class, 'aprove_withdraw']);


});

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
//user routes
Route::group(['middleware' => ['auth', 'user']], function () {  
 Route::get('/wealth_wheel', [App\Http\Controllers\Admin\WheelController::class, 'wealth_wheel'])->name('wealth_wheel');
Route::post('/add_user_balance', [UserController::class, 'add_user_balance'])->name('add_user_balance');

// Routes for paypal
Route::post('charge', [App\Http\Controllers\PaymentController::class, 'charge'])->name('charge');
Route::get('success', [App\Http\Controllers\PaymentController::class, 'success'])->name('success');
Route::get('error', [App\Http\Controllers\PaymentController::class, 'error'])->name('error');

//Routes For wheels
Route::post('/create_wealth_wheel', [App\Http\Controllers\Admin\WheelController::class, 'create_wealth_wheel'])->name('create_wealth_wheel');
Route::get('/wheels_details', [UserController::class, 'wheels_details'])->name('wheels_details');



Route::get('/my_wheels', [UserController::class, 'my_wheels']);

// Routes for Stripe
Route::post('stripe_post', [App\Http\Controllers\StripePaymentController::class, 'stripePost'])->name('stripe_post');


// Routes for payment from wallet
Route::post('/pay_from_wallet', [UserController::class, 'pay_from_wallet'])->name('pay_from_wallet');

// deposite balance 
Route::post('deposit_balance', [UserController::class, 'deposit_balance']);
Route::post('paypal_deposit_balance', [App\Http\Controllers\PaymentController::class, 'paypal_deposit_balance'])->name('paypal_deposit_balance');
Route::get('paypal_success', [App\Http\Controllers\PaymentController::class, 'paypal_success'])->name('paypal_success');

// withdraw
Route::get('withdraw/{id}', [UserController::class, 'withdraw']);
Route::post('wihdraw_submit', [UserController::class, 'wihdraw_submit']);
Route::post('update_profile', [UserController::class, 'update_profile']);

// close wheel
Route::post('close_wheel/{id}', [UserController::class, 'close_wheel']);




});


