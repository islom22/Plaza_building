<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ObjectController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [HomeController::class, 'index'])->name('admin');

Route::post('upload-image', [WebController::class, 'uploadImage'])->name('upload-image');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('translations', \App\Http\Controllers\TranslationsController::class);
    Route::post('/translations/search', [\App\Http\Controllers\TranslationsController::class, 'search'])->name('translation.search');
    Route::resource('application', \App\Http\Controllers\ApplicationController::class);
    Route::resource('partner', \App\Http\Controllers\PartnerController::class);
    Route::resource('langs', \App\Http\Controllers\LangsController::class);
    Route::resource('services', \App\Http\Controllers\ServiceController::class);
    Route::resource('objects', \App\Http\Controllers\ObjectController::class);
    Route::resource('projects', \App\Http\Controllers\ProjectController::class);
    Route::resource('info', InfoController::class);
});

Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale(), 'middleware' => 'locale'], function(){
    Route::get('/', [WebController::class, 'index'])->name('index');
    Route::get('/services',[WebController::class, 'services'])->name('services');
    Route::get('/info',[WebController::class, 'info'])->name('info');
    Route::get('/about', [WebController::class, 'about'])->name('about');
    Route::get('/projects', [WebController::class, 'projects'])->name('projects');
    Route::get('/projects/{id}',[WebController::class, 'projects_show'])->name('projects_show');
    // Route::post('/application', [WebController::class, 'application'])->name('application');
    // Route::get('/projects/completed', [WebController::class, 'completed_projects'])->name('completed_projects');
    // Route::get('/projects/real', [WebController::class, 'real_projects'])->name('real_projects');
    // Route::get('/certificates', [WebController::class, 'certificates'])->name('certificates');
});
