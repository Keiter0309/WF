<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotController;
use App\Http\Controllers\WineController;
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
Route::get('/', [WineController::class, 'index', 'showCart'])->name('home');


Route::get('/signup', function () {
    return view('register');
})->name('signup');

Route::post('/signup', [AuthController::class, 'signup']);

Route::get('/login', function () {
    return view('/login');
})->name('login');

Route::get('/product-details/{id}', [WineController::class, 'showProductDetails'])->name('product.details');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forget.password');

Route::post('/forgot-password', [ForgotController::class, 'forgotPassword']);

Route::get('/reset-password/{token}', [ForgotController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('/reset-password', [ForgotController::class, 'resetPassword'])->name('reset.password.post');

Route::get('/cart', [WineController::class, 'wineCart'])->name('cart');
Route::get('/add-to-cart/{id}', [WineController::class, 'addToCart'])->name('add.to.cart');
Route::post('/update-cart', [WineController::class, 'updateCart'])->name('update.cart');
Route::get('/delete-product/{id}', [WineController::class, 'deleteProduct'])->name('delete.product');
Route::get('/remove-from-cart/{id}', [WineController::class, 'removeFromCart'])->name('remove.from.cart');
Route::get('success-form', function () {
    return view('success-form');
})->name('success-form');

Route::get('/search', [WineController::class, 'search'])->name('search');
Route::get('/store', [WineController::class, 'filter'])->name('store');
Route::get('/products/{id}', [WineController::class, 'detailsProduct',])->name('details');
Route::get('/test', [WineController::class, 'countries'])->name('test');
Route::get('/country/{country}', [App\Http\Controllers\WineController::class, 'showByCountry'])->name('country.show');
Route::get('/checkout', [WineController::class, 'showCheckout'])->name('checkout');
Route::post('/checkout', [WineController::class, 'handleCheckout'])->name('checkout.handle');
Route::get('order/success/{id}', [WineController::class, 'orderSuccess'])->name('order.success');
Route::get('/ourstory', function (){
    return view('ourstory');
})->name('ourstory');
Route::get('/about', function (){
    return view('about');
})->name('about');
Route::get('contact', function (){
    return view('contact');
})->name('contact');
Route::get('/profile', function (){
    return view('profile');
})->name('profile')->middleware('auth');
Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::get('/users', [App\Http\Controllers\AdminController::class, 'showUsers'])->name('admin.users');
    Route::get('/products', [App\Http\Controllers\AdminController::class, 'showProduct'])->name('admin.products');
    Route::get('/add-product', [App\Http\Controllers\AdminController::class, 'addProduct'])->name('admin.add-product');
    Route::post('/add-product', [App\Http\Controllers\AdminController::class, 'handleAddProduct'])->name('admin.handle-add-product');
    Route::get('edit-product/{id}', [App\Http\Controllers\AdminController::class, 'editProduct'])->name('admin.edit-product');
    Route::post('edit-product/{id}', [App\Http\Controllers\AdminController::class, 'handleEditProduct'])->name('admin.handle-edit-product');
    Route::get('add-user', [App\Http\Controllers\AdminController::class, 'addUser'])->name('admin.add-user');
    Route::post('add-user', [App\Http\Controllers\AdminController::class, 'handleAddUser'])->name('admin.handle-add-user');
    Route::get('edit-user/{id}', [App\Http\Controllers\AdminController::class, 'editUser'])->name('admin.edit-user');
    Route::post('edit-user/{id}', [App\Http\Controllers\AdminController::class, 'handleEditUser'])->name('admin.handle-edit-user');
    Route::get('orders', [App\Http\Controllers\AdminController::class, 'showOrders'])->name('admin.orders');
    Route::delete('delete-product/{id}', [App\Http\Controllers\AdminController::class, 'deleteProduct'])->name('admin.delete-product');
    Route::delete('delete-user/{id}', [App\Http\Controllers\AdminController::class, 'deleteUser'])->name('admin.delete-user');
});
