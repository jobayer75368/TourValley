<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.index');
})->name('home');
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');
Route::get('/packages', function () {
    return view('frontend.packages');
})->name('packages');
Route::get('/destination', function () {
    return view('frontend.destination');
})->name('destination');
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');
Route::get('/guides', function () {
    return view('frontend.guides');
})->name('guides');
Route::get('/package_details', function () {
    return view('frontend.package_details');
})->name('package_details');
Route::get('/booking', function () {
    return view('frontend.booking');
})->name('booking');
// dashboard 
Route::get('/customer_dashboard', function () {
    return view('frontend.dashboard');
})->name('customer_dashboard');


// Backend starts here 
Route::get('/admin/dashboard', function () {
    return view('backend.dashboard');
})->name('admin.dashboard');

// / ******Backend starts here *******///

// Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {

//     // Dashboard 
//     Route::get('/dashboard', [UserController::class, 'dashboardIndex'])->name('dashboard');
//
//     // User manage 
//     Route::middleware('admin')->group(function () {
//         Route::get('/users', [UserController::class, 'index'])->name('user.index');
//         Route::get('/users/show/{id}', [UserController::class, 'show'])->name('user.show');
//         Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
//         Route::post('/users/update/{id}', [UserController::class, 'update'])->name('user.update');
//         Route::post('/users/{id}', [UserController::class, 'approve'])->name('user.approve');
//         Route::post('/users/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');
//     });

//     Route::get('/users/inaccessible', function () {
//         return view('backend.user.inaccessible');
//     })->name('user.inaccessible');


//     // Profile manage 
//     Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
//     Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');



//     // service management 
//     Route::get('/services', [ServiceController::class, 'index'])->name('service.index');

//     Route::get('/services/create', [ServiceController::class, 'create'])->name('service.create');

//     Route::post('/services/store', [ServiceController::class, 'store'])->name('service.store');

//     Route::get('/services/{id}', [ServiceController::class, 'show'])->name('service.show');

//     Route::get('/services/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');

//     Route::post('/services/update/{id}', [ServiceController::class, 'update'])->name('service.update');

//     Route::post('/services/delete/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');



//     // Blog management 
//     Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');

//     Route::get('/blogs/create', [BlogController::class, 'create'])->name('blog.create');
//     Route::post('/blogs/store', [BlogController::class, 'store'])->name('blog.store');

//     Route::get('/blogs/show/{id}', [BlogController::class, 'show'])->name('blog.show');

//     Route::get('/blogs/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');

//     Route::post('/blogs/update/{id}', [BlogController::class, 'update'])->name('blog.update');

//     Route::post('/blogs/delete/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');


//     // Team management 

//     Route::controller(MemberController::class)->group(function () {
//         Route::get('/team_members', 'index')->name('team.index');
//         Route::get('/team_members/create', 'create')->name('team.create');
//         Route::post('/team_members/store', 'store')->name('team.store');
//         Route::get('/team_members/show/{id}', 'show')->name('team.show');
//         Route::get('/team_memebers/edit/{id}', 'edit')->name('team.edit');
//         Route::post('/team_memebers/update/{id}', 'update')->name('team.update');
//         Route::post('/team_memebers/delete/{id}', 'destroy')->name('team.destroy');
//     });


//     // Portfolio management 
//     Route::controller(PortfolioController::class)->group(function () {
//         Route::get('/portfolios', 'index')->name('portfolio.index');
//         Route::get('/portfolios/create', 'create')->name('portfolio.create');
//         Route::post('/portfolios/store', 'store')->name('portfolio.store');
//         Route::get('/portfolios/show/{id}', 'show')->name('portfolio.show');
//         Route::get('/portfolios/edit/{id}', 'edit')->name('portfolio.edit');
//         Route::post('/portfolios/update/{id}', 'update')->name('portfolio.update');
//         Route::post('/portfolios/delete/{id}', 'destroy')->name('portfolio.destroy');
//     });

//     // SLider Management

//     Route::controller(SliderController::class)->group(function () {
//         Route::get('/slider', 'index')->name('slider.index');
//         Route::get('/slider/create', 'create')->name('slider.create');
//         Route::post('/slider/store', 'store')->name('slider.store');
//         Route::post('/slider/delete/{id}', 'destroy')->name('slider.destroy');
//     });

//     // Message management 
//     Route::get('/messages', [MessageController::class, 'index'])->name('message.index');

//     Route::get('/messages/{id}', [MessageController::class, 'show'])->name('message.show');

//     Route::post('/messages/{id}', [MessageController::class, 'destroy'])->name('message.destroy');


//     Route::get('/settings/general', [SettingController::class, 'generalEdit'])->name('setting.general');
//     Route::post('/settings/general', [SettingController::class, 'generalUpdate'])->name('setting.general.update');

//     Route::get('/settings/about', [SettingController::class, 'aboutEdit'])->name('setting.about');
//     Route::post('/settings/about', [SettingController::class, 'aboutUpdate'])->name('setting.about.update');

//     Route::get('/settings/contact', [SettingController::class, 'contactEdit'])->name('setting.contact');
//     Route::post('/settings/contact', [SettingController::class, 'contactUpdate'])->name('setting.contact.update');
// });


// require __DIR__ . '/auth.php';
