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

use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductcategoryController;

Route::get('/', [SiteController::class, 'index']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();  
Route::group(['middleware' => 'auth'], function () {        
Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/product-category', [ProductcategoryController::class, 'productcategory']);
Route::get('/create-pcategory', [ProductcategoryController::class, 'createpcategory']);
Route::post('/addpcategory', [ProductcategoryController::class, 'addproductcategory'])->name('addproductcategory');
Route::get('/pcatinactive/{id}', [ProductcategoryController::class, 'pcatinactive'])->name('inactive-pcategory');
Route::get('/pcatactive/{id}', [ProductcategoryController::class, 'pcatactive'])->name('active-pcategory');
Route::get('/deletepcat/{id}', [ProductcategoryController::class, 'deletepcat'])->name('delete-pcategory');
Route::get('/editpcat/{id}', [ProductcategoryController::class, 'editpcat'])->name('edit-pcategory');
Route::post('/updatepcategory', [ProductcategoryController::class, 'updatepcategory'])->name('updatepcategory');
});





