<?php

use Illuminate\Support\Facades\Auth;
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


// Route::get('/admin', function () {
//     return view('admin.index');})
//     ->middleware('adminauth');


// Route::group(['prefix' => '/admin'], function() {
//     Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('getLogin');
//     Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('postLogin');
//     Route::post('/logout', [AdminAuthController::class, 'adminLogout'])->name('adminLogout');
//     Route::resource('/dashboard', DashboardController::class)->middleware('adminauth');
//     // Route::get('/dashboard', [DashboardController::class, 'data'])->name('data');
// });


// Route::group(['middleware' => 'adminauth'], function() {
//     Route::resource('colors', ColorController::class);
//     Route::resource('sizes', SizeController::class);
//     Route::resource('types', TypeController::class);
//     Route::resource('materials', MaterialController::class);
//     Route::resource('categories', CategoryController::class);
//     Route::resource('products', ProductsController::class);
//     Route::resource('product_images', ProductImageController::class);
//     Route::resource('orders', OrdersController::class);
//     Route::resource('order_items', OrderItemsController::class);
//     Route::resource('admins', AdminController::class);
//     Route::resource('users', UserController::class);
//     Route::resource('blogs', BlogController::class);
//     Route::resource('blog_categories', BlogCategoryController::class);
//     Route::resource('blog_images', BlogImageController::class);
//     Route::resource('contact', ContactController::class);

//     Route::resource('permissions', PermissionsController::class);
//     Route::resource('roles', RolesController::class);
// });


// Auth::routes();

// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/catalog', [PagesController::class, 'catalog'])->name('catalog');
// Route::get('/catalog_single/{id}', [PagesController::class, 'catalog_single'])->name('catalog_single');
// Route::get('blog', [PagesController::class, 'blog'])->name('blog');
// Route::get('/blog_single/{id}', [PagesController::class, 'blog_single'])->name('blog_single');
// // Route::get('/custom', [CustomController::class, 'custom'])->name('custom');
// Route::get('/catalog_category', [PagesController::class, 'catalog_category'])->name('catalog_category');
// Route::get('/product', [PagesController::class, 'product'])->name('product');


// Route::get('/add_to_cart/{id}', [PagesController::class, 'getAddToCart'])->name('add_to_cart');
// Route::get('/cart', [PagesController::class, 'getCart'])->name('cart');
// Route::get('/deleteCart/{id}', [PagesController::class, 'deleteCart'])->name('deleteCart');
// Route::post('/updateCart/{id}', [PagesController::class, 'updateCart'])->name('updateCart');
// Route::get('/reduceCart/{id}', [PagesController::class, 'getReduceCart'])->name('reduceCart');

// Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
// Route::post('/postCheckout/{id}', [CheckoutController::class, 'postCheckout'])->name('postCheckout');

// Route::post('/wishlist/{id}', [ProfileController::class, 'wishlist'])->name('wishlist');
// Route::post('/deleteWish/{id}', [ProfileController::class, 'deleteWish'])->name('deleteWish');

// Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
// Route::patch('/profileEdit/{id}', [ProfileController::class, 'profileEdit'])->name('profileEdit');

// Route::resource('contacts', ContactsController::class);


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
