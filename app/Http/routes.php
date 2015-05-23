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

// Login.
Route::get('login', 'Admin\IndexController@login');

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
