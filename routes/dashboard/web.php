<?php
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect' , 'localizationRedirect' , 'localeViewPath']
        ],
        function(){

            Route::prefix('dashboard')->name('dashboard.')->group(function () {

            Route::get('/index', 'Dashboard\DashboardController@index')->name('index');

            });

        });
