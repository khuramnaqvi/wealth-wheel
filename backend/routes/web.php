<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//admin routes
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {

    //index
    Route::get('/', [\App\Http\Controllers\AdminController::class, 'index']);

    //users
    Route::get('/users', [\App\Http\Controllers\UserController::class, 'users'])->name('admin.users');
    Route::get('user/create', [\App\Http\Controllers\UserController::class, 'create'])->name('admin.user.create');
    Route::post('user/save', [\App\Http\Controllers\UserController::class, 'save'])->name('admin.user.save');
    Route::get('user/{user}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('admin.user.edit');
    Route::post('user/{user}/update', [\App\Http\Controllers\UserController::class, 'update'])->name('admin.user.update');
    Route::get('user/{user}/delete', [\App\Http\Controllers\UserController::class, 'delete'])->name('admin.user.delete');

    //currency
    Route::get('/currency', [\App\Http\Controllers\CurrencyController::class, 'index'])->name('admin.currency');
    Route::get('currency/create', [\App\Http\Controllers\CurrencyController::class, 'create'])->name('admin.currency.create');
    Route::post('currency/save', [\App\Http\Controllers\CurrencyController::class, 'save'])->name('admin.currency.save');
    Route::get('currency/{currency}/edit', [\App\Http\Controllers\CurrencyController::class, 'edit'])->name('admin.currency.edit');
    Route::post('currency/{currency}/update', [\App\Http\Controllers\CurrencyController::class, 'update'])->name('admin.currency.update');
    Route::get('currency/{currency}/delete', [\App\Http\Controllers\CurrencyController::class, 'delete'])->name('admin.currency.delete');


    //plans
    Route::get('/plans', [\App\Http\Controllers\PlanController::class, 'index'])->name('admin.plan');
    Route::get('plan/create', [\App\Http\Controllers\PlanController::class, 'create'])->name('admin.plan.create');
    Route::post('plan/save', [\App\Http\Controllers\PlanController::class, 'save'])->name('admin.plan.save');
    Route::get('plan/{plan}/edit', [\App\Http\Controllers\PlanController::class, 'edit'])->name('admin.plan.edit');
    Route::post('plan/{plan}/update', [\App\Http\Controllers\PlanController::class, 'update'])->name('admin.plan.update');
    Route::get('plan/{plan}/delete', [\App\Http\Controllers\PlanController::class, 'delete'])->name('admin.plan.delete');

    //products
    Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('admin.product');
    Route::get('product/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('admin.product.create');
    Route::post('product/save', [\App\Http\Controllers\ProductController::class, 'save'])->name('admin.product.save');
    Route::get('product/{product}/edit', [\App\Http\Controllers\ProductController::class, 'edit'])->name('admin.product.edit');
    Route::post('product/{product}/update', [\App\Http\Controllers\ProductController::class, 'update'])->name('admin.product.update');
    Route::get('product/{product}/delete', [\App\Http\Controllers\ProductController::class, 'delete'])->name('admin.product.delete');


    //deposit
    Route::get('/deposit', [\App\Http\Controllers\DepositController::class, 'index'])->name('admin.deposit');
    Route::get('/deposit/approve/{deposit}', [\App\Http\Controllers\DepositController::class, 'approve'])->name('admin.approve.deposit');

  //withdraw
    Route::get('/withdraw', [\App\Http\Controllers\WithdrawController::class, 'index'])->name('admin.withdraw');
    Route::get('/withdraw/approve/{withdraw}', [\App\Http\Controllers\WithdrawController::class, 'approve'])->name('admin.approve.withdraw');

    //setting
    Route::get('/setting', [\App\Http\Controllers\SettingController::class, 'index'])->name('admin.setting');
    Route::post('/setting/update', [\App\Http\Controllers\SettingController::class, 'update'])->name('admin.setting.update');


});

Route::get('logout',[\App\Http\Controllers\HomeController::class,'logout']);
Route::post('login',[\App\Http\Controllers\Auth\LoginController::class,'login']);
//user routes
Route::prefix('user')->middleware(['auth', 'user'])->group(function () {


});
