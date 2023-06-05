<?php

use App\Http\Controllers\PlantStoreController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('index');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/catalogue', [CatalogueController::class, 'index'])->name('catalogue');

Route::get('/plantStore', [PlantStoreController::class, 'index'])->name('plantStore');

Route::get('/plantStore', [ProductController::class, 'index'])->name('plantStore');
Route::get('/checkout', [ProductController::class, 'checkout'])->name('checkout');
Route::post('/session', [ProductController::class, 'session'])->name('session');
Route::get('/success', [ProductController::class, 'success'])->name('success');

Route::get('/paid', [ProductController::class, 'success'])->name('paid');
