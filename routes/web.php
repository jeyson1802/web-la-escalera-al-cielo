<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VideoController;
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

Route::get('/', [HomeController::class , 'index'])->name('home.index');

Route::get('/quienessomos', [HomeController::class , 'quienessomos'])->name('home.quienessomos');

Route::get('/misionvision', [HomeController::class , 'misionvision'])->name('home.misionvision');

Route::get('/organigrama', [HomeController::class , 'organigrama'])->name('home.organigrama');

Route::get('/preguntasfrecuentes', [HomeController::class , 'preguntasfrecuentes'])->name('home.preguntasfrecuentes');

Route::get('/', [HomeController::class , 'index'])->name('home.index');

Route::get('/autocomplete',[HomeController::class, 'autocomplete'])->name('home.autocomplete');

Route::get('/person/{country}', [PersonController::class , 'show'])->name('person.show');

Route::post('/person', [PersonController::class , 'store'])->name('person.store');

Route::get('/contacto', [ContactoController::class , 'show'])->name('contacto.show');

Route::post('/contacto', [ContactoController::class , 'store'])->name('contacto.store');

Route::get('/post', [PostController::class , 'index'])->name('post.index');

Route::get('/post/{post}', [PostController::class , 'show'])->name('post.show');

Route::get('/document', [DocumentController::class , 'index'])->name('document.index');

Route::get('/video', [VideoController::class , 'index'])->name('video.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
