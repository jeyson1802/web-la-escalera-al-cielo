<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', [HomeController::class , 'index'])->name('admin.index');

Route::resource('categories', CategoryController::class)->names('admin.categories');

Route::resource('users', UserController::class)->only(['index','edit','update'])->names('admin.users');

Route::resource('posts', PostController::class)->names('admin.posts');