<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::prefix(LaravelLocalization::setLocale())
    ->middleware([
         'localeSessionRedirect',
         'localizationRedirect',
         'localeViewPath',
    ])
    ->group(function () {

        Route::get('/', 'WelcomeController@index')->name('welcome');

        Route::get('/home', 'HomeController@index')->name('home')->middleware('user.status');

        Auth::routes();
    });
