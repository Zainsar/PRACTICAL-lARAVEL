<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customcontroller;
use App\Http\Controllers\formcontroller;
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

Route::controller(customcontroller::class)->group(
    function () {
        Route::get('/home', 'home')->name('home');
        Route::get('/about', 'about')->name('about');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/menu', 'menu')->name('menu');
        Route::get('/service', 'service')->name('service');
        Route::get('/testimonial', 'testimonial')->name('testimonial');
        Route::get('/team', 'team')->name('team');
        Route::get('/booking', 'booking')->name('booking');
    }
);

route::get('/form' , [formcontroller::class ,'form']);
route::post('/form' , [formcontroller::class , 'data']);
route::get('/std/view', [formcontroller::class , 'std_view']);
route::get('/std/dlt/{id}', [formcontroller::class , 'std_dlt'])->name('Zain');