<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => ['auth', 'can:manage-user']], function(){
    Route::get('/admin/users/new','Admin\UserController@new')->name('admin.users.new');
    Route::resource('/admin/users','Admin\UserController', array('names' => 'admin.users'));
    Route::resource('/admin/roles','Admin\RoleController', array('names' => 'admin.roles'));
    Route::resource('/admin/teams','Admin\TeamController', array('names' => 'admin.teams'));
    Route::resource('/admin/positions','Admin\PositionController', array('names' => 'admin.positions'));
    Route::resource('/admin/accounts','Admin\UserAccountController', array('names' => 'admin.account'));
    Route::resource('/admin/employments','Admin\EmploymentController', array('names' => 'admin.employment'));
    Route::resource('/admin/departments','Admin\DepartmentController', array('names' => 'admin.departments'));
});