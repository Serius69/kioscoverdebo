<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;

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
    Route::get('aboutus',  'aboutus');
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
    Route::get('news/intermediaty',  'intermediaty');
    Route::get('news/agend', 'agend');
    Route::get('news/investigation',  'investigation');
    Route::get('news/news',  'news');
    Route::get('news/newsn',  'newsn');
});

Route::controller(ServiceController::class)->group(function(){
    Route::get('service/recicle',  'recicle');
    Route::get('service/ofert', 'ofert');
    Route::get('service/advice',  'advice');
});


Route::controller(LoginController::class)->group(function(){
    Route::get('login/login',  'login');
    Route::get('login/signup', 'signup');
});


Route::controller(ProjectController::class)->group(function(){
    // Route::get('project/$name',  'login');
    Route::get('project/project', 'project');
});



