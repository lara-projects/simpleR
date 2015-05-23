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
 * AUTH
---------------------------------------------------------------------- */

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

// Login.
Route::get('login', 'Auth\AuthController@getLogin');

// TODO: İleride çıkarılması lazım.
// Register
Route::get('kayit', 'Auth\AuthController@getRegister');

// Çıkış
Route::get("logout", 'Admin\IndexController@logout');

/** ----------------------------------------------------------------------
 * ADMIN
 ---------------------------------------------------------------------- */

// Admin anasayfa.
Route::get('admin', 'Admin\IndexController@index');


/** ----------------------------------------------------------------------
 * ADMIN GEÇİCİ
---------------------------------------------------------------------- */

Route::get('admin/charts', 'Admin\IndexController@charts');

Route::get('admin/forms', 'Admin\IndexController@forms');

Route::get('admin/panels', 'Admin\IndexController@panels');

Route::get('admin/tables', 'Admin\IndexController@tables');

Route::get('admin/widgets', 'Admin\IndexController@widgets');



