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

//Routes For User
Route::get('/', [App\Http\Controllers\UserController::class, 'user'])->name('user_home');
Route::get('/products', [App\Http\Controllers\UserController::class, 'products'])->name('products');
Route::get('/about', [App\Http\Controllers\UserController::class, 'about'])->name('about');
Route::get('/faq', [App\Http\Controllers\UserController::class, 'faq'])->name('faq');
Route::get('/contact', [App\Http\Controllers\UserController::class, 'contact'])->name('contact');
//Routes For create_wheel
Route::get('/wealth_wheel', [App\Http\Controllers\Admin\WheelController::class, 'wealth_wheel'])->name('wealth_wheel');
Route::post('/create_wealth_wheel', [App\Http\Controllers\Admin\WheelController::class, 'create_wealth_wheel'])->name('create_wealth_wheel');


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
// Routes for wheels crud
Route::get('/wheels', [App\Http\Controllers\Admin\WheelController::class, 'wheels'])->name('wheels');

});
Route::post('/create_wealth_wheel', [App\Http\Controllers\Admin\WheelController::class, 'create_wealth_wheel'])->name('create_wealth_wheel');



Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');



//user routes
Route::prefix('user')->middleware(['auth', 'user'])->group(function () {
});


