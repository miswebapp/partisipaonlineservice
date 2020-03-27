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
    Route::get('/admin/users/new','Admin\Basic\UserController@new')->name('admin.users.new');
    Route::resource('/admin/users','Admin\Basic\UserController', array('names' => 'admin.users'));
    Route::resource('/admin/roles','Admin\Basic\RoleController', array('names' => 'admin.roles'));
    Route::resource('/admin/teams','Admin\Basic\TeamController', array('names' => 'admin.teams'));
    Route::resource('/admin/positions','Admin\Basic\PositionController', array('names' => 'admin.positions'));
    Route::resource('/admin/accounts','Admin\Basic\UserAccountController', array('names' => 'admin.account'));
    Route::resource('/admin/employments','Admin\Basic\EmploymentController', array('names' => 'admin.employment'));
    Route::resource('/admin/departments','Admin\Basic\DepartmentController', array('names' => 'admin.departments'));
    Route::resource('/admin/modules','Admin\Basic\ModulesController', array('names' => 'admin.modules'));
    Route::resource('/admin/usermodules','Admin\Basic\UserModuleController', array('names' => 'admin.usermodules'));
});