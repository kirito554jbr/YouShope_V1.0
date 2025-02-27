<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProductController;
use App\Models\Categorie;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


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


Route::get('/', function () {return view('welcome');});

Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth'])->name('dashboard');

// Route::get('/createProduct', function() {return view('Admin.createProduct');});

require __DIR__.'/auth.php';


Route::get('/role/create', [RoleController::class, 'create']);


Route::get('/Products', [ProductController::class, 'index']);
Route::get('/Products/create', [ProductController::class, 'create']);
Route::post('/Products', [ProductController::class, 'delete']);
Route::get('/Products/updateProducts', [ProductController::class, 'update']);
Route::get('/Products/update/{id}', [ProductController  ::class, 'showOne']);



Route::get('/Categorie/create', [CategorieController::class, 'create']);


Route::get('/createProduct', [ProductController::class, 'showCategory']);



//client

Route::get('/ProductsCalient', [ProductController::class, 'indexClient'])->middleware(['auth']);

Route::get('/logout' , [AuthenticatedSessionController::class , 'destroy']);



