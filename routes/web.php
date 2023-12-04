<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\LandingPageController;

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

Route::get('/', function () {
    return view('welcome');
});

//Login Action
Route::get('/admin/login', [LoginController::class, 'login'])->name('login');
Route::post('/admin/login', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

//Register
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

//Landing Page Routes
Route::get('/landing', [LandingPageController::class, 'index'])->name('landing');
Route::get('/about', [LandingPageController::class, 'about'])->name('about');
Route::get('services', [LandingPageController::class, 'services'])->name('services');

//Dashboard routes
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

//Cars Route
Route::get('/cars', [CarsController::class, 'index'])->name('cars')->middleware('auth');
Route::get('/addcars', [CarsController::class, 'create'])->name('addcar')->middleware('auth');
Route::post('/cars/add', [CarsController::class, 'store'])->name('storecars')->middleware('auth');
Route::get('/cars/edit/{id}', [CarsController::class, 'edit'])->name('editcars')->middleware('auth');
Route::get('/cars/edit/update/{id}', [CarsController::class, 'bikin'])->name('editmobil');
Route::patch('/cars/update/{id}', [CarsController::class, 'update'])->name('updatecars')->middleware('auth');
Route::delete('/cars/delete/{id}', [CarsController::class, 'destroy'])->name('deletecars')->middleware('auth');


Route::get('/transactions', [TransactionsController::class, 'index'])->name('transactions');
