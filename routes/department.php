<?php



Route::group(['prefix' => 'admin/department'], function () {
    Route::get('show', 'admin\departmentController@show')->name('showDepartment')->middleware('auth');
    Route::post('add', 'admin\departmentController@add')->name('addDepartment')->middleware('auth');
    Route::get('delete', 'admin\departmentController@delete')->name('deleteDepartment')->middleware('auth');
    Route::get('showsetGroup', 'admin\departmentController@showGroup')->name('showGroup')->middleware('auth');
    Route::post('setGroup', 'admin\departmentController@setGroup')->name('setGroup')->middleware('auth');
    Route::get('deleteGroup', 'admin\departmentController@deleteGroup')->name('deleteGroup')->middleware('auth');

});