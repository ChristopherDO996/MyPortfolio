<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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
    return view('home');
})->name("home");

Route::get('about', function () {
    return view('about');
})->name("about");

Route::get('skills', function () {
    return view('abilities');
})->name("skills");

Route::get('portfolio', function () {
    return view('portfolio');
})->name("portfolio");

Route::get('contact', function () {
    return view('contact');
})->name("contact");

Route::get('blog', function () {
    return view('blog');
})->name("blog");
