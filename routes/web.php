<?php

use App\Http\Controllers\Admin\Auth\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;




Route::get('/admin_', function () {
    return view('dashboard.index');})
    ->middleware('adminauth');


Route::group(['prefix' => '/admin'], function() {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('getLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('postLogin');
    Route::post('/register', [AdminAuthController::class, 'postLogin'])->name('postLogin');
    Route::post('/logout', [AdminAuthController::class, 'adminLogout'])->name('adminLogout');
    Route::resource('dashboard', DashboardController::class)->middleware('adminauth');
});


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

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
Auth::routes(['verify' => true]);
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/home', [HomeController::class, 'index'])
// ->middleware(['auth', 'verified'])
// ->name('home');
Route::get('/home', [HomeController::class, 'homeDisplay'])->name('homeDisplay');
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
Route::get('/catalog', [PagesController::class, 'catalog'])->name('catalog');
Route::get('/catalog/detail', [PagesController::class, 'catalog_detail'])->name('catalogDetail');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/blog/single', [PagesController::class, 'blog_single'])->name('blogSingle');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/cart/add/', [PagesController::class, 'add_to_cart'])->name('addToCart');
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
Route::get('/profile', [ProfileController::class, 'index'])->name('index');
Route::get('/profile/show/{id}', [ProfileController::class, 'show'])->name('show');
Route::get('/profile/edit/{id}', [ProfileController::class, 'edit'])->name('edit');
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
