<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models;


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

// Route::get('/', function () {
//     return view('admin.dashboards.dashboards');
// });

// Route::get('/', 'DashboardController@index')->name('admin-dashboard');
//  Route::resource('employes', 'EmployesController');

Route::get('/', 'Admin\DashboardsController@index')->name('admin-dashboard');

// ->middleware(['auth', '1'])
Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {
        Route::resource('employes', 'EmployesController');
        Route::resource('budgets', 'BudgetsController');
    });
Auth::routes();
