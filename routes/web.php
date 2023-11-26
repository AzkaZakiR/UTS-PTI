<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarsController;

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
// Route::get('/dashboard', [CustomAuthController::class, 'dashboard' ]);
// Route::get('/login', [CustomAuthController::class, 'index' ])->name('login');
// Route::get('/masuk', [CustomAuthController::class, 'masuk'])->name('masuk');
// Route::post('/custom-login', [CustomAuthController::class, 'custom-login' ])->name('login.custom');
// Route::get('/registration', [CustomAuthController::class, 'registration' ])->name('register-user');
// Route::post('/custom-registration', [CustomAuthController::class, 'customRegistration' ])->name('register.custom');
// Route::get('/signout', [CustomAuthController::class, 'signOut' ])->name('signout');

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('', [LoginController::class, 'actionlogin'])->name('actionlogin');

//Register
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
Route::get('/rumah', [RegisterController::class, 'rumah'])->name('rumah');
//Login Action
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

//Cars Route
Route::get('/cars', [CarsController::class, 'index'])->name('cars')->middleware('auth');
Route::get('/addcars', [CarsController::class, 'create'])->name('addcar')->middleware('auth');
Route::post('/cars/add', [CarsController::class, 'store'])->name('storecars')->middleware('auth');
Route::get('/cars/edit/{id}', [CarsController::class, 'edit'])->name('editcars')->middleware('auth');
Route::patch('/cars/update/{id}', [CarsController::class, 'update'])->name('updatecars')->middleware('auth');
Route::delete('/cars/delete/{id}', [CarsController::class, 'destroy'])->name('deletecars')->middleware('auth');


