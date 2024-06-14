<?php

use App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [Frontend::class, 'index'])->name('home');
Route::get('/commercial', [Frontend::class, 'commercial'])->name('commercial');
Route::get('/residential', [Frontend::class, 'residential'])->name('residential');
Route::get('/contact-us', [Frontend::class, 'contact_us'])->name('contact_us');
Route::get('/about', [Frontend::class, 'about'])->name('about');


//servicess

Route::get('/asphalt-paving', [Frontend::class, 'asphalt_paving'])->name('asphalt_paving');
Route::get('/concrete-services', [Frontend::class, 'concrete_services'])->name('concrete_services');
Route::get('/patching-and-crack-filling', [Frontend::class, 'patching_and_crack_filling'])->name('patching_and_crack_filling');
Route::get('/snow-removal', [Frontend::class, 'snow_removal'])->name('snow_removal');
