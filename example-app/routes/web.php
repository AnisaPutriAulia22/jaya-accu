<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ValidasiController;
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
// LOGIN
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


// DEFAULT: redirect ke sesuai role
Route::get('/', function () {
    if (Auth::check()) {
        return Auth::user()->role === 'admin'
            ? redirect('/admin')
            : redirect('/home');
    }

    return redirect()->route('login'); // <-- ini sekarang tidak error
});

// ADMIN
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', fn() => view('admin.dashboard'));
    Route::resource('products', ProductController::class);
    Route::get('validasi', [ValidasiController::class, 'index'])->name('admin.validasi');
    Route::post('/admin/order/{id}/status/{status}', [ValidasiController::class, 'updateStatus'])->name('admin.order.updateStatus');
    Route::get('/chat', fn() => view('admin.chat'));
});

// USER
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::resource('product', ProdukController::class);
    Route::get('/account', fn() => view('user.account'));
    Route::get('/about', fn() => view('user.about'));
    Route::get('/contact', fn() => view('user.contact'));

    Route::get('order', [CheckoutController::class, 'showOrder'])->name('checkout.order');
    Route::post('/order/cancel', [CheckoutController::class, 'cancelOrder'])->name('order.cancel');

});
Route::post('/checkout', [CheckoutController::class, 'store']);

