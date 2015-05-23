<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('admin', 'AdminIndexController@index');

Route::get('admin/charts', 'AdminChartsController@index');

Route::get('admin/forms', 'AdminFormsontroller@index');

Route::get('admin/panels', 'AdminPanelsController@index');

Route::get('admin/tables', 'AdminTablesController@index');

Route::get('admin/widgets', 'AdminWidgetsController@index');
