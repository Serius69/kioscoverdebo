<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Routes
|
*/
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LatestController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| CRUD
|
*/
use App\Http\Controllers\Crud\LatestCRUDController;
use App\Http\Controllers\Crud\EventCRUDController;
use App\Http\Controllers\Crud\ProjectCRUDController;
use App\Http\Controllers\CrudController;
//

/*
|--------------------------------------------------------------------------
| Google
|
*/
use App\Http\Controllers\Auth\GoogleSocialiteController;
/*
|--------------------------------------------------------------------------
| Login ang SignUp
|
*/
use App\Http\Controllers\Auth\AuthController;

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

// Route::get('/', HomeController::class);

Route::controller(HomeController::class)->group(function(){
    Route::get('/',  '__invoke');
    Route::get('admin',  'admin');
});

Route::controller(AboutController::class)->group(function(){
    Route::get('aboutus',  'indexAbout');
});

Route::controller(ContactController::class)->group(function(){
    Route::get('contactus/question',  'question');
    Route::get('contactus/', 'index');
    Route::get('contactus/standars',  'standars');
});

Route::controller(FooterController::class)->group(function(){
    Route::get('footer/privacy',  'privacy');
    Route::get('footer/terms', 'terms');
});

Route::controller(LatestController::class)->group(function(){
    Route::get('news/intermediaty',  'intermediaty');
    Route::get('news/agend', 'agend');
    Route::get('news/investigation',  'investigation');
    Route::get('news/news',  'indexLatest');
    Route::get('news/newsn',  'newsn');
    Route::get('admin/createnew',  'createnew');
    Route::get('admin/editnew',  'editnew');
});

Route::controller(ServiceController::class)->group(function(){
    Route::get('service/recicle',  'recicle');
    Route::get('service/ofert', 'ofert');
    Route::get('service/advice',  'advice');
});

Route::controller(LoginController::class)->group(function(){
    Route::get('login',  'login');
    Route::get('signup', 'signup');
});

Route::controller(ProjectController::class)->group(function(){
    // Route::get('project/$name',  'login');
    Route::get('project/project', 'lastProjects');
});
Route::controller(LatestCRUDController::class)->group(function(){
    Route::get('admin/latest', 'index');
    Route::get('admin/createlatest', 'create');
    Route::get('admin/editlatest', 'edit');
});
Route::controller(EventCRUDController::class)->group(function(){
    Route::get('admin/event', 'index');
    Route::get('admin/createevent', 'create');
    Route::get('admin/editevent', 'edit');
});
Route::controller(ProjectCRUDController::class)->group(function(){
    Route::get('admin/project', 'index');
    Route::get('admin/createproject', 'create');
    Route::get('admin/editproject', 'edit');
});

// Login
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');


// Integration with Google
Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);

// CRUD
Route::resource('latests', LatestCRUDController::class);
Route::resource('events', EventCRUDController::class);
Route::resource('projects', ProjectCRUDController::class);

//Image
Route::get('image-upload', [ ImageController::class, 'index' ]);
Route::post('image-upload', [ ImageController::class, 'store' ])->name('image.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


