<?php



Route::group(['prefix' => 'admin/department'], function () {
    Route::get('show', 'admin\departmentController@show')->name('showDepartment');
    Route::post('add', 'admin\departmentController@add')->name('addDepartment');
    Route::get('delete', 'admin\departmentController@delete')->name('deleteDepartment');
    Route::get('showsetGroup', 'admin\departmentController@showGroup')->name('showGroup');
    Route::get('setGroup', 'admin\departmentController@setGroup')->name('setGroup');

});