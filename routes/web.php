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
Nama: Azka Zaki R
NIM: 10121203
Kelas: IF-5
|
*/

Route::get('/', [LandingPageController::class, 'index'])->name('index');

//Login Action
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/admin/login', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

//Register
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

//Landing Page Routes
// Route::get('/main', [LandingPageController::class, 'main'])->name('main');
Route::get('/main', [LandingPageController::class, 'index'])->name('main');
Route::get('/about', [LandingPageController::class, 'about'])->name('about');
Route::get('/services', [LandingPageController::class, 'services'])->name('services');
Route::get('/pricing', [LandingPageController::class, 'pricing'])->name('pricing');
Route::get('/carslist', [LandingPageController::class, 'cars'])->name('carslist');
Route::get('/car/{id}', [LandingPageController::class, 'detailcar'])->name('cardetail');
Route::get('/checkoutcar/{id}', [LandingPageController::class, 'checkoutcar'])->name('checkoutcar')->middleware('auth');

//Dashboard routes

//Cars Route
// Route::middleware()
Route::middleware(['isadmin'])->group(function () {
    Route::get('/cars', [CarsController::class, 'index'])->name('cars');
    Route::get('/addcars', [CarsController::class, 'create'])->name('addcar');
    Route::post('/cars/add', [CarsController::class, 'store'])->name('storecars');
    Route::get('/cars/edit/{id}', [CarsController::class, 'edit'])->name('editcars');
    Route::patch('/cars/update/{id}', [CarsController::class, 'update'])->name('updatecars');
    Route::delete('/cars/delete/{id}', [CarsController::class, 'destroy'])->name('deletecars');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/transactions', [TransactionsController::class, 'index'])->name('transactions');
});

//Transactio Routes
Route::post('/createtransactions/{id}',[TransactionsController::class, 'store'])->name('createtransactions')->middleware('auth');
