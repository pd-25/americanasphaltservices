<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\PartnerLogoController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [Frontend::class, 'index'])->name('home');
Route::get('/commercial', [Frontend::class, 'commercial'])->name('commercial');
Route::get('/residential', [Frontend::class, 'residential'])->name('residential');
Route::get('/contact-us', [Frontend::class, 'contact_us'])->name('contact_us');
Route::post('/contact-us', [Frontend::class, 'contact_usPost'])->name('contact_usPost');
Route::get('/about', [Frontend::class, 'about'])->name('about');


//servicess

Route::get('/asphalt-paving', [Frontend::class, 'asphalt_paving'])->name('asphalt_paving');
Route::get('/concrete-services', [Frontend::class, 'concrete_services'])->name('concrete_services');
Route::get('/patching-and-crack-filling', [Frontend::class, 'patching_and_crack_filling'])->name('patching_and_crack_filling');
Route::get('/snow-removal', [Frontend::class, 'snow_removal'])->name('snow_removal');


Route::get('admin/login', [AuthController::class, 'showLogin'])->name('admin.showlogin');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::group(['prefix'=>'admin'],function(){
Route::resource('/testimonials', TestimonialController::class);
Route::resource('/partner-logo', PartnerLogoController::class);
Route::get('log-out', [AuthController::class, 'adminLogout'])->name('admin.logout');
});

