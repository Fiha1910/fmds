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
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebController;

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

// for website
Route::get('/',[WebController::class,'webhome'])->name('home.page');
Route::post('/register',[WebController::class,'registration'])->name('registration');
Route::post('/user/login',[WebController::class,'login'])->name('user.login');
Route::get('/user/logout', [WebController::class, 'logout'])->name('user.logout');

Route::get('/category/list',[CategoryController::class,'categorylist'])->name('category.list');
Route::get('/category/wise/product/{id}',[CategoryController::class,'categorywiseproduct'])->name('categorywiseproduct');

// for admin

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post("/login-do",[AuthController::class,'doLogin'])->name("do.login");

Route::get('/logout',[AuthController::class,'logout'])->name('do.logout');

Route::group(['middleware'=>'auth','prefix'=>'admin'],function(){


Route::get('/',[HomeController::class, 'admin'])->name("admin");
Route::get('/showhome',[HomeController::class,'showhome']);


// Branch:
Route::get('/branches',[BranchController::class,'list'])->name('branches.list');
Route::get('branches/create',[BranchController::class,'create'])->name('branch.create');
Route::post('/branches/form/create',[BranchController::class,'details'])->name('branches.form');
Route::get('/branches/delete/{branches_id}',[BranchController::class,'deletebranch'])->name('admin.branch.delete');
// for edit,update
Route::get('/branch/edit/{branch_id}',[BranchController::class,'editbranch'])->name('branch.edit');
Route::put('/branch/edit/{branch_id}',[BranchController::class,'update'])->name('branch.update');

// Category:
Route::get('/category',[CategoryController::class,'categories'])->name('categories.list');
Route::get('/category/create/form',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/create/form/submit',[CategoryController::class,'form'])->name('category.form');
//for delete option
Route::get('/product/delete/{product_id}',[CategoryController::class,'deleteproduct'])->name('admin.product.delete');
// for edit:
Route::get('category/edit/{category_id}',[CategoryController::class,'editcategory'])->name('category.edit');    
Route::put('category/edit/{category_id}',[CategoryController::class,'update'])->name('category.update');

// Products
Route::get('/products',[ProductsController::class,'list'])->name('product.list');
Route::get('products/create/list',[ProductsController::class,'create'])->name('product.create');
Route::post('/products/create/form',[ProductsController::class,'createform'])->name('create.form');

// Demand
Route::get('/demands',[DemandController::class,'list'])->name('demand.list');
Route::get('/demands/create',[DemandController::class,'create'])->name('demand.create');
Route::post('/demands/form',[DemandController::class,'form_details'])->name('demand.submit');

// Distribution:
Route::get('/distributions',[DistributionController::class,'list'])->name('distributions.list');
Route::get('/distributions/create/form',[DistributionController::class,'form_post'])->name('distributions.form');
Route::post('/distributions/store',[DistributionController::class,'store'])->name('distribution.store');
// for delete option
Route::get('/products/distribute/{distribute_id}',[DistributionController::class,'deletedistribute'])->name('products.delete');

Route::get('/reports',[ReportController::class,'list'])->name('reports.list');
Route::get('/report/create/form',[ReportController::class,'list'])->name('report.list');
Route::post('/report/form/store',[ReportController::class,'store'])->name('report.store');



});