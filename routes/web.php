<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\WebComponentController;

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

Route::get('/', [FrontendController::class, 'home'])->name('front.home');
Route::get('/sitemin', [FrontendController::class, 'login'])->name('back.sitemin');
Route::post('/sitemin/login', [FrontendController::class, 'admin'])->name('back.sitemin.login');

Route::group(['middleware' => 'DashboardMiddleware'], function() { 
    Route::get('/dashboard', [BackendController::class, 'index'])->name('back.dash');
    Route::get('/logout', [BackendController::class, 'logout'])->name('back.logout');

    //General Settings
    Route::get('/dashboard/settings', [BackendController::class, 'setting'])->name('back.setting');
    Route::post('/dashboard/settings', [BackendController::class, 'updateSetting'])->name('back.setting.update');

    //Web Components

        //Banner Words
        Route::get('/dashboard/web-components/banner_words', [WebComponentController::class, 'bannerWords'])->name('back.banner-words');
        Route::post('/dashboard/web-components/banner_words', [WebComponentController::class, 'ajax'])->name('back.banner-words.ajax');


});


