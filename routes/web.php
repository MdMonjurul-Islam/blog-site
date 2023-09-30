<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\BlogController;
USE App\Http\Controllers\Blog\BlogCategoryController;

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/blog-single',[HomeController::class,'BlogSingle'])->name('blog-single');
Route::get('/blog-category',[HomeController::class,'category'])->name('blog-category');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),

    'verified',
])->group(function () {


    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');


    Route::get('/blog-category-create',[BlogCategoryController::class,'create'])->name('blog-categories.create');
    Route::post('/blog-category-store',[BlogCategoryController::class,'store'])->name('blog-categories.store');
    Route::get('/blog-category-manage',[BlogCategoryController::class,'manage'])->name('blog-categories.manage');
    Route::get('/blog-category-edit/{id}',[BlogCategoryController::class,'edit'])->name('blog-categories.edit');
    Route::post('/blog-category-update/{id}',[BlogCategoryController::class,'update'])->name('blog-categories.update');

    Route::get('/blog-category-delete/{id}',[BlogCategoryController::class,'delete'])->name('blog-categories.delete');

    Route::get('/blog-create',[BlogController::class,'create'])->name('blog.create');
    Route::post('/blog-store',[BlogController::class,'store'])->name('blog.store');
    Route::get('/blog-manage',[BlogController::class,'manage'])->name('blog.manage');
    Route::post('/blog-update',[BlogController::class,'update'])->name('blog.update');
    Route::get('/blog-edit',[BlogController::class,'edit'])->name('blog.edit');
    Route::get('/blog-delete',[BlogController::class,'delete'])->name('blog.delete');

});
