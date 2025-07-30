<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;


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
    return view('userSection.index');
})->name('home');
Route::get('/about', function () {
    return view('userSection.about');
})->name('about');
Route::get('/services', function () {
    return view('userSection.service');
})->name('services');
Route::get('/package', function () {
    return view('userSection.package');
})->name('package');
Route::get('/destination', function () {
    return view('userSection.destination');
})->name('destination');
Route::get('/blog', function () {
    return view('userSection.blog');
})->name('blog');
Route::get('/contact', function () {
    return view('userSection.contact');
})->name('contact');
Route::get('/admin', function () {
    return view('sign-in');
})->name('signIn');
Route::get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
// Route::get('/admin/table', function () {
//     return view('admin.pages.tables');
// })->name('adminTable');
Route::resource('destination', DestinationController::class);
// Route::get('/', function () {
//     return view('userSection.layout.master');
// });