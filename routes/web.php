<?php
<<<<<<< HEAD
=======

>>>>>>> 5e246acb31178e9f76957c5b91fef062be249b02
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
<<<<<<< HEAD
=======
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
>>>>>>> 5e246acb31178e9f76957c5b91fef062be249b02
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

<<<<<<< HEAD
// Cars
Route::get('/car/search', [CarController::class, 'search'])->name('car.search');
Route::get('/car/watchlist', [CarController::class, 'watchlist'])->name('car.watchlist');
Route::resource('car', CarController::class);


// Auth
Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Brands
Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');
Route::post('/brand', [BrandController::class, 'store'])->name('brand.store');
Route::get('/car', [CarController::class, 'index'])->name('car.index');
Route::get('/car/{id}/edit', [CarController::class, 'edit'])->name('car.edit');
Route::put('/car/{id}', [CarController::class, 'update'])->name('car.update');
Route::delete('/car/{id}', [CarController::class, 'destroy'])->name('car.destroy');
=======
Route::get('/car/search', [CarController::class, 'search'])->name('car.search');
Route::get('/car/watchlist', [CarController::class, 'watchlist'])->name('car.watchlist');
Route::resource('car', CarController::class);
Route::get('/car/{car}', [CarController::class, 'show'])->name('car.show');

Route::get('/signup', [SignupController::class, 'create'])->name('signup');

Route::get('/login', [LoginController::class, 'create_1'])->name('login');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup');
Route::post('/signup', [AuthController::class, 'register'])->name('register');


Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');
Route::post('/brand', [BrandController::class, 'store'])->name('brand.store');
>>>>>>> 5e246acb31178e9f76957c5b91fef062be249b02
