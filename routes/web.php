<?php
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(
    ['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['web']],
    function () {
        Route::get('/', function () {
            return view('welcome');
        })->name('home');
    }
);


