<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
//use App\Http\controller;

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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('products',ProductController::class);
/*Route::get('/products/index',[App\Http\Controllers\ProductController::class,'index'])->name('products.index');

Route::get('/products/create',[App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
Route::get('/products/show',[App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
Route::get('/products/edit/{id}',[App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');

Route::post('/products/store',[App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
Route::put('/products/update',[App\Http\Controllers\ProductController::class, 'update'])->name('products.update');
 

Route::delete('/products/destroy',[App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');


*/


Route::get('product/soft/delete/{id}', [App\Http\Controllers\ProductController::class,'softDelete'])
->name('soft.delete');

Route::get('product/trash',[App\Http\Controllers\ProductController::class,'trashedProducts'])
->name('product.trash');


Route::get('product/back/from/trash/{id}',[App\Http\Controllers\ProductController::class,'backFromSoftDelete'])
->name('product.back.from.trash');

 Route::get('product/delete/from/database/{id}', [App\Http\Controllers\ProductController::class,'deleteForEver'])
 ->name('product.delete.from.database');
// Auth::routes();


///////////////////////////////////////////////profile///////////////////////////////////////

Route::put('/update',[App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

Route::get('/profile',[App\Http\Controllers\ProfileController::class,'index'])->name('profile');


///////////////////////////////Routes for post////////////////////////////////////////////


Route::get('/posts/index',[App\Http\Controllers\PostController::class,'index'])->name('posts');
Route::get('/posts/trashed',[App\Http\Controllers\PostController::class,'postsTrashed'])->name('posts.trashed');
Route::get('/post/create',[App\Http\Controllers\PostController::class, 'create'])->name('post.create');
Route::get('/post/show/{slug}',[App\Http\Controllers\PostController::class, 'show'])->name('post.show');
Route::get('/post/edit/{id}',[App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
Route::post('/post/store',[App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::put('/post/update/{id}',[App\Http\Controllers\PostController::class, 'update'])->name('post.update');
Route::get('/post/destroy/{id}',[App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');
Route::get('/post/hdelete/{id}',[App\Http\Controllers\PostController::class, 'hdelete'])->name('post.hdelete');
Route::get('/post/restore/{id}',[App\Http\Controllers\PostController::class, 'restore'])->name('post.restore');
