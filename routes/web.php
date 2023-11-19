<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;

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


Route::get('/',[PageController::class,'index'])->name('index');
Route::get('/hairs',[PageController::class,'hairs'])->name('hairs');
Route::get('/hairs/{slug}',[PageController::class,'hairDetail'])->name('hairDetail');
Route::get('/opd',[PageController::class,'opd'])->name('opd');
Route::get('/opd/{slug}',[PageController::class,'opdDetail'])->name('opdDetail');
Route::get('/photo-gallery',[PageController::class,'image'])->name('image');
Route::get('/video-gallery',[PageController::class,'video'])->name('video');
Route::get('/faqs',[PageController::class,'faq'])->name('faq');
Route::get('/blogs',[PageController::class,'blog'])->name('blog');
Route::get('/blogs/{slug}',[PageController::class,'blogDetail'])->name('blogDetail');
Route::get('/dental-blogs/{slug}',[PageController::class,'dentalBlogDetail'])->name('dentalBlogDetail');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/dental',[PageController::class,'dental'])->name('dental');

Route::POST('/get-a-call',[PageController::class,'call'])->name('call');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::post('/add-edit-faqs',[AdminController::class,'addUpdateFaqs']);
});
