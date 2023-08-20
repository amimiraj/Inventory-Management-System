<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\PurchaseController;

use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/', 'homeController');

Route::get('/adminWelcome', [homeController::class, 'adminWelcome']);
Route::get('/adminDashboard', [homeController::class, 'adminWelcome']);

Route::get('/addAccount', [homeController::class, 'addAccount']);
Route::post('/saveAccountInfo', [homeController::class, 'saveAccountInfo']);

Route::get('/manageAccount', [homeController::class, 'manageAccount']);
Route::post('/deleteAccount', [homeController::class, 'deleteAccount']);

Route::get('/adminStock', [homeController::class, 'adminStock']);
Route::post('/viewAdminStock', [homeController::class, 'viewAdminStock']);

Route::get('/adminReport', [homeController::class, 'adminReport']);
Route::post('/viewAdminReport', [homeController::class, 'viewAdminReport']);
Route::post('/view_iteams_AdminReport', [homeController::class, 'view_iteams_AdminReport']);




//----------------------------Shop Manager---------------------------------------------------------
Route::get('/addSupplier', [SupplierController::class, 'index']);
Route::post('/saveSupplier', [SupplierController::class, 'store']);

Route::get('/manageSupplier', [SupplierController::class, 'manageSupplier']);
Route::post('/editSupplier', [SupplierController::class, 'editSupplier']);
Route::post('/updateSupplier/{id}', [SupplierController::class, 'updateSupplier']);
Route::post('/deleteSupplier', [SupplierController::class, 'deleteSupplier']);

Route::get('/addBrand', [BrandController::class, 'index']);
Route::post('/saveBrand', [BrandController::class, 'saveBrand']);

Route::get('/manageBrand', [BrandController::class, 'manageBrand']);
Route::post('/editBrand', [BrandController::class, 'editBrand']);
Route::post('/updateBrand/{id}', [BrandController::class, 'updateBrand']);
Route::post('/deleteBrand', [BrandController::class, 'deleteBrand']);

Route::get('/addCategory', [CategoryController::class, 'index']);
Route::post('/saveCategory', [CategoryController::class, 'saveCategory']);

Route::get('/manageCategory', [CategoryController::class, 'manageCategory']);
Route::post('/deleteCategory', [CategoryController::class, 'deleteCategory']);

Route::get('/addProduct', [ProductController::class, 'addProduct']);
Route::post('/saveProduct', [ProductController::class, 'saveProduct']);

Route::get('/manageProduct', [ProductController::class, 'manageProduct']);
Route::post('/deleteProduct', [ProductController::class, 'deleteProduct']);

Route::get('/purchase', [PurchaseController::class, 'purchase']);
Route::post('/savePurchase', [PurchaseController::class, 'savePurchase']);

Route::get('/stock', [PurchaseController::class, 'stock']);

Route::get('/sale', [SaleController::class, 'index']);
Route::post('/addMore', [SaleController::class, 'addMore']);

Route::get('/sale-view', [SaleController::class, 'order_show']);
Route::get('/confirm-page', [SaleController::class, 'confirm_page']);
Route::post('/confirm-order', [SaleController::class, 'confirm_order']);
Route::post('/delete-order', [SaleController::class, 'delete']);



Route::get('/report', [SaleController::class, 'report']);
Route::post('/view-iteams', [SaleController::class,'view_iteams']);

// Route::get('/daily_report', [homeController::class, 'daily_report']);
// Route::get('/monthly_report', [homeController::class, 'monthly_report']);
