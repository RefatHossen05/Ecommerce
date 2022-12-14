<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CancellationController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\FeedbackController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\PurchaseController;
use App\Http\Controllers\backend\BillingController;
use App\Http\Controllers\backend\SubcategoryController;
use App\Http\Controllers\auth\AuthController;




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
    return view('backend.master');
});

Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

                                #AuthController
Route::get('/regform',[AuthController::class,'regform'])->name('regform');


                                #CategoryController

Route::get('/categorylist',[CategoryController::class,'categorylist'])->name('category.list');
Route::get('/categoryform',[CategoryController::class,'categoryform'])->name('category.form');
Route::post('/categorystore',[CategoryController::class,'categorystore'])->name('category.store');
Route::get('/categorydelete/{id}',[CategoryController::class,'categorydelete'])->name('category.delete');
Route::get('/categoryedit/{id}',[CategoryController::class,'categoryedit'])->name('category.edit');
Route::put('/categoryupdate/{id}',[CategoryController::class,'updateform'])->name('category.update');







                                #ProductController
Route::get('/productlist',[ProductController::class,'productlist'])->name('product.list');
Route::get('/productform',[ProductController::class,'productform'])->name('product.form');





                                #CustomerController
Route::get('/customerlist',[CustomerController::class,'customerlist'])->name('customer.list');
Route::get('/customerform',[CustomerController::class,'customerform'])->name('customer.form');




                                #BillingController
Route::get('/billinglist',[BillingController::class,'billinglist'])->name('billing.list');
Route::get('/billingform',[BillingController::class,'billingform'])->name('billing.form');





                                #PurchaseController
Route::get('/purchaselist',[PurchaseController::class,'purchaselist'])->name('purchase.list');
Route::get('/purchaseform',[PurchaseController::class,'purchaseform'])->name('purchase.form');




                                #CancellationController
Route::get('/cancellationlist',[CancellationController::class,'createlist'])->name('create.list');
Route::get('/cancellationform',[CancellationController::class,'createform'])->name('create.form');





                                #FeedbackController
Route::get('/feedbacklist',[FeedbackController::class,'feedbacklist'])->name('feedback.list');
Route::get('/feedbackform',[FeedbackController::class,'feedbackform'])->name('feedback.form');


                                #SubcategoryController
Route::get('/subcategorylist',[SubcategoryController::class,'subcategorylist'])->name('subcategory.list');
Route::get('/subcategoryform',[SubcategoryController::class,'subcategoryform'])->name('subcategory.form');
