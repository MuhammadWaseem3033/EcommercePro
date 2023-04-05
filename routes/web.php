<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])
->group(function (){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/Logout',function(){
    return redirect('/');
})->name('Logout');
Route::get('/redirect',[HomeController::class,'redirect']);

//home page for user
Route::get('/',[HomeController::class,'index']);
route::get('/product-details/{id}',[HomeController::class,'product_details']);
route::post('/add_cart/{id}',[HomeController::class,'add_cart']);
Route::get('/show_cart',[HomeController::class,'show_cart']);
Route::get('/remove-product/{id}',[HomeController::class,'remove_product']);
Route::get('/cash_order',[HomeController::class,'cash_order']);

// End Home Page 

//Category Route
Route::get('/category',[AdminController::class,'show_category'])->name('admin.category');
Route::get('/create-category',[AdminController::class,'create_category'])->name('admin.create.category');
Route::post('/add-category',[AdminController::class,'add_category']);
Route::get('/delete-category/{id}',[AdminController::class,'delete_category']);
Route::get('/show-category/{id}', [AdminController::class, 'ShowCategory'])->name('show.category');
//Product route
Route::get('/product',[ProductController::class,'productIndex'])->name('product');
Route::get('/create-product',[ProductController::class,'create_product'])->name('admin.product.create.product');
Route::post('/add-product',[ProductController::class,'add_product']);
Route::get('/delete-product/{id}',[ProductController::class,'delete_product']);
Route::get('/update-product/{id}',[ProductController::class,'update_product'])->name('updata.product');
Route::post('/update-product-confirm/{id}',[ProductController::class,'update_product_confirm']);
// order
Route::get('/order',[AdminController::class,'order'])->name('order');
Route::get('/deliver/{id}',[AdminController::class,'deliver']);
Route::get('/Print-pdf/{id}',[AdminController::class,'print_pdf']);
Route::get('/search',[AdminController::class,'search']);
// end order