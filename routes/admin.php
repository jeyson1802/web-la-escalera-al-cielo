<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', [HomeController::class , 'index'])->middleware('can:admin.index')->name('admin.index');

Route::resource('users', UserController::class)->only(['index','edit','update'])->names('admin.users');

Route::resource('roles', RoleController::class)->except('show')->names('admin.roles');

Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');

Route::resource('posts', PostController::class)->except('show')->names('admin.posts');

Route::resource('documents', DocumentController::class)->except('show')->names('admin.documents');
