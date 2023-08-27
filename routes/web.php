<?php

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

    Route::get(LaravelLocalization::transRoute('routes.services'), function () {
        return view('site.services.index', [
            'services' => Service::published()->orderBy('created_at', 'desc')->get(),
        ]);
    })->name('services');

    Route::get(LaravelLocalization::transRoute('routes.service'), function (Service $service) {
        return view('site.services.show', [
            'item' => $service,
        ]);
    })->name('service');

    Route::get(LaravelLocalization::transRoute('routes.contact'), function () {
        return view('contact');
    })->name('contact');

    Route::get(LaravelLocalization::transRoute('routes.about'), function () {
        return view('about');
    })->name('about');

    Route::get('/', function () {
        return view('homepage');
    })->name('home');;

});





