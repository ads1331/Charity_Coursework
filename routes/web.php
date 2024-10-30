<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('contact'); // или укажите контроллер и метод, если он существует
})->name('contact');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');
Route::get('/donate', [DonationController::class, 'create'])->name('donate.create');
Route::post('/donate', [DonationController::class, 'store'])->name('donate.store');
Route::get('/contact',[MainController::class, 'contact'])->name('contact');
Route::get('/about',[MainController::class, 'about'])->name('about');
Route::get('/',[MainController::class, 'index'])->name('index');
Route::get('/single',[MainController::class, 'single'])->name('single');
Route::get('/causes',[MainController::class, 'causes'])->name('causes');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
