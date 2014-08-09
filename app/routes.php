<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

$locales = Config::get('app.locales');

foreach ($locales as $locale) {

    App::setLocale($locale);

    $home = trans('routes.home');
    $legal = trans('routes.legal');

    Route::get($home, 'IndexController@indexAction');
    Route::get($legal, 'LegalController@indexAction');
}

Route::get('/', 'IndexController@indexAction');
