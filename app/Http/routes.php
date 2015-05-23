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


/** ----------------------------------------------------------------------
 * ADMIN
 ---------------------------------------------------------------------- */

// Admin anasayfa.
Route::get('admin', 'AdminIndexController@index');


/** ----------------------------------------------------------------------
 * ADMIN GEÇİCİ
---------------------------------------------------------------------- */

Route::get('admin/charts', 'AdminIndexController@charts');

Route::get('admin/forms', 'AdminIndexController@forms');

Route::get('admin/panels', 'AdminIndexController@panels');

Route::get('admin/tables', 'AdminIndexController@tables');

Route::get('admin/widgets', 'AdminIndexController@widgets');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
