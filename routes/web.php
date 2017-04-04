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



Route::get('auth/register', 'Auth\RegisterController@redirectRegisterTenants');

Route::post('/register_tenant', 'Auth\RegisterController@registerTenants');

/*Route::post('new_users', 
  ['as' => 'user_store', 'uses' => 'Auth\RegisterController@store']);*/

Route::get('/confirmation/{token}', 'Auth\RegisterController@confirmation')->name('confirmation');

Route::get('/logout', 'Auth\LoginController@logout');
Route::get('password/reset','Auth\ResetPasswordController@reset');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('settings','TenantController');
    Route::resource('membros','MembroController');
    Route::resource('dominios', 'DominioController');
    Route::resource('user/profile', 'Auth\ProfileController');
    Route::resource('menus', 'MenuController');
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('permissions', 'PermissionController');
});

Route::get('/login-activity', 'LoginActivityController@index')->middleware('auth');


//Route::get('mail', 'HomeController@mail')->name('confirmation');