<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Admin\AdminController@login')->name('login');
Route::post('credentials', 'Admin\AdminController@Credentials')->name('check.credentials');
Route::post('logout', 'Admin\AdminController@logout')->name('logout');

//Company Crud
Route::group(['namespace' => 'Admin', 'middleware' => 'admin'], function () {
    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::group(['namespace' => 'Company', 'prefix' => 'Company'], function () {
        Route::get('/create', 'CompanyController@create')->name('admin.company.create');
        Route::post('/store', 'CompanyController@store')->name('admin.company.store');
        Route::get('/list', 'CompanyController@list')->name('admin.get.company.list');
        Route::get('/edit/{id}', 'CompanyController@edit')->name('admin.company.edit');
        Route::put('/update/{id}', 'CompanyController@update')->name('admin.company.update');
        Route::delete('/delete/{id}', 'CompanyController@destroy')->name('admin.company.delete');
        Route::get('/employee/list/{id}', 'CompanyController@employeelist')->name('admin.get.company.employee.list');
    });

    //Employee Crud
    Route::group(['namespace' => 'Employee', 'prefix' => 'Employee'], function () {
        Route::get('/create', 'EmployeeController@create')->name('admin.employee.create');
        Route::post('/store', 'EmployeeController@store')->name('admin.employee.store');
        Route::get('/list', 'EmployeeController@list')->name('admin.get.employee.list');
        Route::get('/edit/{id}', 'EmployeeController@edit')->name('admin.employee.edit');
        Route::put('/update/{id}', 'EmployeeController@update')->name('admin.employee.update');
        Route::delete('/delete/{id}', 'EmployeeController@destroy')->name('admin.employee.delete');
    });
});
