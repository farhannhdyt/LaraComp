<?php

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

// Route BackEnd
Route::group(['prefix' => 'site'], function (){
    Route::get('/', [\App\Http\Controllers\Site\PageController::class, 'index'])->name('dashboard');
    
    // Products
    Route::get('products', [\App\Http\Controllers\Site\ProductController::class, 'index'])->name('products.index');
    Route::get('products/{id}', [\App\Http\Controllers\Site\ProductController::class, 'show'])->name('products.detail');
    Route::get('products/create', [\App\Http\Controllers\Site\ProductController::class, 'create'])->name('products.create');
    Route::post('products/store', [\App\Http\Controllers\Site\ProductController::class, 'store'])->name('products.store');

    // Pricing
    Route::get('pricing', [\App\Http\Controllers\Site\PricingController::class, 'index'])->name('pricing.index');
    Route::get('pricing/create', [\App\Http\Controllers\Site\PricingController::class, 'create'])->name('pricing.create');
    Route::get('pricing/show/{id}', [\App\Http\Controllers\Site\PricingController::class, 'show'])->name('pricing.show');
    Route::post('pricing/store', [\App\Http\Controllers\Site\PricingController::class, 'store'])->name('pricing.store');
    Route::get('pricing/edit/{id}', [\App\Http\Controllers\Site\PricingController::class, 'edit'])->name('pricing.edit');
    Route::patch('pricing/update/{id}', [\App\Http\Controllers\Site\PricingController::class, 'update'])->name('pricing.update');
    Route::patch('pricing/destroy/{id}', [\App\Http\Controllers\Site\PricingController::class, 'destroy'])->name('pricing.destroy');

    // User Management
    Route::resource('users', 'Site\\UserController');

    // Profile Management
    Route::get('users/my_profile/{id}', 'Site\\UserController@profile')->name('my-profile');
    Route::get('users/my_password/{id}', 'Site\\UserController@profilePassword')->name('my-password');
    Route::patch('users/update-profile/{id}', 'Site\\UserController@changeProfile')->name('update-profile');
    Route::patch('users/update-password/{id}', 'Site\\UserController@changePassword')->name('update-password');

    // Company
    Route::get('company', [\App\Http\Controllers\Site\CompanyController::class, 'index'])->name('company.index');
    Route::get('company/create', [\App\Http\Controllers\Site\CompanyController::class, 'create'])->name('company.create');
    Route::post('company/store', [\App\Http\Controllers\Site\CompanyController::class, 'store'])->name('company.store');

    // Team
    Route::get('team', [\App\Http\Controllers\Site\TeamController::class, 'index'])->name('team.index');
    Route::get('team/show/{id}', [\App\Http\Controllers\Site\TeamController::class, 'show'])->name('team.show');
    Route::get('team/create', [\App\Http\Controllers\Site\TeamController::class, 'create'])->name('team.create');
    Route::post('team/store', [\App\Http\Controllers\Site\TeamController::class, 'store'])->name('team.store');
    Route::get('team/edit/{id}', [\App\Http\Controllers\Site\TeamController::class, 'edit'])->name('team.edit');
    Route::patch('team/update/{id}', [\App\Http\Controllers\Site\TeamController::class, 'update'])->name('team.update');
    Route::delete('team/destroy/{id}', [\App\Http\Controllers\Site\TeamController::class, 'destroy'])->name('team.destroy');
});

// Route Front End
Route::get('/', 'PageController@index')->name('index');
Route::get('/blog', 'PageController@blog')->name('blog');

// Contact
Route::get('/contact', 'ContactController@create')->name('contact.create');
Route::post('/contact-send', 'ContactController@store')->name('contact-send');

Auth::routes();

// Remove Register
Route::match(["GET", "POST"], "/register", function () {
    return redirect("/login");
})->name("register");

Route::get('/home', 'HomeController@index')->name('home');
