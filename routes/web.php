<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\ServiceController;
use Illuminate\Support\Facades\Route;

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

use App\Models\Service;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localize', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function () {

    Route::get(LaravelLocalization::transRoute('routes.services'), [ServiceController::class, 'index'])
        ->name('services');

    Route::get(LaravelLocalization::transRoute('routes.service'), [ServiceController::class, 'show'])
        ->name('service');

    Route::get(LaravelLocalization::transRoute('routes.contact'), ContactController::class)
        ->name('contact');

    Route::get(
        LaravelLocalization::transRoute('routes.about'), AboutController::class
    )->name('about');

    Route::get('/', HomepageController::class)->name('home');

});





