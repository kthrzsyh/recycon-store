<?php

use App\Http\Controllers\CategoryController;
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
    return view('home', [
        "title" => 'Home'
    ]);
});


Route::get('/admin', function () {
    return view('admin.home', [
        "title" => "admin"
    ]);
});

Route::get('/admin/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/admin/category/add', [CategoryController::class, 'add'])->name('category.add');
Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/admin/category/update', [CategoryController::class, 'update'])->name('category.update');
Route::get('/admin/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
