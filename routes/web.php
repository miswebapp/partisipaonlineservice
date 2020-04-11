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
    Route::resource('/admin/frs','Admin\Frs\MainController', array('names' => 'admin.frs'));
    Route::resource('/admin/frs-users','Admin\Frs\FrsUsersController', array('names' => 'admin.frs.users'));
    Route::resource('/admin/frs-usersteam','Admin\Frs\FrsUserTeamController', array('names' => 'admin.frs.userteam'));

    Route::resource('/admin/frs-teams','Admin\Frs\FrsTeamsController', array('names' => 'admin.frs.teams'));
    Route::resource('/admin/frs-programs','Admin\Frs\FrsProgramsController', array('names' => 'admin.frs.programs'));
    Route::resource('/admin/frs-projects','Admin\Frs\FrsProjectController', array('names' => 'admin.frs.projects'));
    Route::resource('/admin/frs-activities','Admin\Frs\FrsActivitiesController', array('names' => 'admin.frs.activities'));
    Route::resource('/admin/frs-monitoringtools','Admin\Frs\FrsMonitoringToolsController', array('names' => 'admin.frs.monitoringtools'));
    Route::resource('/admin/frs-counterparts','Admin\Frs\FrsCounterpartsController', array('names' => 'admin.frs.counterparts'));


});