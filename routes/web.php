<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServiceController;




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

Route::get('/', HomeController::class);

Route::controller(AboutController::class)->group(function(){
    Route::get('about',  'about');
});

Route::controller(ContactController::class)->group(function(){
    Route::get('contact/question',  'question');
    Route::get('contact/contactus', 'contactus');
    Route::get('contact/standars',  'standars');
});

Route::controller(FooterController::class)->group(function(){
    Route::get('footer/privacy',  'privacy');
    Route::get('footer/terms', 'terms');
});

Route::controller(NewsController::class)->group(function(){
    Route::get('cursos/intermediaty',  'intermediaty');
    Route::get('cursos/agend', 'agend');
    Route::get('cursos/investigation',  'investigation');
    Route::get('cursos/news',  'news');
});

Route::controller(ServiceController::class)->group(function(){
    Route::get('cursos/recicle',  'recicle');
    Route::get('cursos/ofert', 'ofert');
    Route::get('cursos/advice',  'advice');
});



