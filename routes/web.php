<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\DemandController;
use App\Http\Controllers\DistributionController;
use App\Http\Controllers\ReportController;

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


Route::get('/',[HomeController::class, 'admin']);
Route::get('/showhome',[HomeController::class,'showhome']);
Route::get('/branches',[BranchController::class,'list'])->name('branches.list');
Route::get('branches/create',[BranchController::class,'create']);
Route::post('/branches/form/create',[BranchController::class,'details'])->name('branches.form');

Route::get('/category',[CategoryController::class,'categories']);
Route::get('/category/create',[CategoryController::class,'store'])->name('category.store');
Route::get('/category/create/form',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/create/form/submit',[CategoryController::class,'form'])->name('category.form');
Route::get('/products',[ProductsController::class,'list']);
Route::get('/stocks',[StockController::class,'list'])->name('stocks.list');
Route::get('/stocks/create/form',[StockController::class,'form']);
Route::post('/stocks/create/form/submit',[StockController::class,'form_post'])->name('stocks.form');

Route::get('/demands',[DemandController::class,'list']);
Route::get('/distributions',[DistributionController::class,'list']);
Route::get('/reports',[ReportController::class,'list']);