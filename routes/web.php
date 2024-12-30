<?php

// use App\Models\ServicesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProjectsControllerController;


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/', [HomeController::class, 'web_home']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/web_products', [HomeController::class, 'web_pruducts']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/web_blog', [HomeController::class, 'web_blog']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/web_career', [HomeController::class, 'web_career']);
Route::get('/faq', [HomeController::class, 'faq']);

Route::get('blog/{id}', [HomeController::class, 'show_blog']);
Route::get('career_show/{id}', [HomeController::class, 'career_show']);
Route::get('show_product/{id}', [HomeController::class, 'show_product']);
// Protect dashboard route
// Protected routes
Route::middleware(['auth'])->group(function () {

    Route::get('admin', [HomeController::class, 'index'])->name('admin');
    Route::get('services', [ServicesController::class, 'index'])->name('services');
    Route::get('blog', [BlogsController::class, 'index'])->name('admin.blog');
    Route::get('projects', [ProjectController::class, 'index'])->name('admin.projects');
    Route::get('products', [ProductsController::class, 'index'])->name('admin.products');
    Route::get('careers', [CareersController::class, 'index']);
    Route::get('users', [UsersController::class, 'index'])->name('admin.users');

    Route::resource('blogs', BlogsController::class);
    Route::resource('services', ServicesController::class);
    Route::resource('careers', CareersController::class);
    Route::resource('users', UsersController::class);
    Route::resource('products', ProductController::class);
    Route::resource('projects', ProjectController::class);

    Route::get('/services/{id}/edit', [ServicesController::class, 'edit'])->name('services.edit');

});

// Route::get('/', [HomeController::class, 'index']);
// Route::get('admin', [HomeController::class, 'index'])->name('admin');
// Route::get('services', [ServicesController::class, 'index'])->name('admin.services');
// Route::get('blog', [BlogsControllerController::class, 'index'])->name('admin.blog');
// Route::get('projects', [ProjectsControllerController::class, 'index'])->name('admin.projects');
// Route::get('products', [ProductsController::class, 'index'])->name('admin.products');
// Route::get('careers', [CareersControllerController::class, 'index'])->name('admin.careers');
// Route::get('users', [UsersController::class, 'index'])->name('admin.users');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
