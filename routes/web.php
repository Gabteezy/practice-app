<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('homepage');
})->name("homepage");

// Route::get('/about', function () {
//     return view('about');
// })->name("about");

// Route::get('/login', function () {
//     return view('login');
// })->name("login");

// Route::get('/services', function () {
//     return view('services');
// })->name("services");

// Route::get('/contact', function () {
//     return view('contact');
// })->name("contact");


// Route::name('dashboard.')->group(function () {
//     Route::get('/admin', function () {
//        return view("account");
//     })->name('admin');
//     Route::get('/user', function () {
//        return view("account");
//     })->name('user');
// });

// Route::name('services.')->group(function () {
//     Route::get('/service1', function () {
//        return view("service1");
//     })->name('service1');
//     Route::get('/service2', function () {
//        return view("service2");
//     })->name('service2');
//     Route::get('/service3', function () {
//        return view("service3");
//     })->name('service3');
// });
