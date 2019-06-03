<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('refLevels', 'RefLevelController');

Route::resource('refCategories', 'RefCategoriesController');

Route::get('refs/{user_id}/{ref_category_id?}', 'RefCategoriesController@refs')->name('refs.user');

Route::resource('tasks', 'TasksController');

Route::resource('taskUsers', 'TaskUserController');