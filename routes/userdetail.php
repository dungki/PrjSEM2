<?php

Route::group(['prefix' => 'admin/user'], function () {
    Route::get('addUser','admin\userController@addUser')->name('addUser')->middleware('auth');
    Route::post('postUser','admin\userController@postUser')->name('postUser')->middleware('auth');
    Route::get('addSalary','admin\userController@addSalary')->name('addSalary');
    Route::get('deleteUser','admin\userController@deleteUser')->name('deleteUser')->middleware('auth');
    Route::get('listUser','admin\userController@listUser')->name('listUser')->middleware('auth');
    Route::get('detail','admin\userDetailController@show')->name('userDetail')->middleware('auth');
    Route::get('showContact','admin\contactController@showContact')->name('showContact')->middleware('auth');
    Route::get('reactivateUser','admin\userController@reactivateUser')->name('reactivateUser')->middleware('auth');
    Route::get('reactivate','admin\userController@reactivate')->name('reactivate')->middleware('auth');
});
?>