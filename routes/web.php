<?php

use Illuminate\Support\Facades\Route;

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

/**********
 HOME ROUTE
**********/
Route::get('/', [\App\Http\Controllers\HomepageController::class, 'index'])->name('pages.index');

/**********
 PROFILE ROUTE
**********/
Route::get('profile', function () {
    return view('pages.profile');
})->name('pages.profile');

/**********
 DASHBOARD ROUTE
**********/
Route::get('dashboard', function () {
    return view('pages.dashboard');
})->name('pages.dashboard');

/**********
 FAQ ROUTE
**********/
Route::get('faq', function () {
    return view('pages.faq');
})->name('pages.faq');

/**********
 BLOG ROUTES
**********/
Route::get('blog', function () {
    return view('pages.blog.blog');
})->name('pages.blog.blog');

Route::get('blog/studiekeuze', function () {
    return view('pages.blog.articles.studiekeuze');
})->name('pages.blog.articles.studiekeuze');

Route::get('blog/swot', function () {
    return view('pages.blog.articles.swot');
})->name('pages.blog.articles.swot');

Route::get('blog/programmeer-ervaring', function () {
    return view('pages.blog.articles.ervaring');
})->name('pages.blog.articles.ervaring');

Route::get('blog/feedback', function () {
    return view('pages.blog.articles.feedback');
})->name('pages.blog.articles.ervaring');

Route::get('blog/html-voor-beginners', function () {
    return view('pages.blog.articles.html-guide');
})->name('pages.blog.articles.html-guide');
