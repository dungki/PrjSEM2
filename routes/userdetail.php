<?php

Route::group(['prefix' => 'admin/user'], function () {
    Route::get('addUser','admin\userController@addUser')->name('addUser');
    Route::post('postUser','admin\userController@postUser')->name('postUser');
    Route::get('deleteUser','admin\userController@deleteUser')->name('deleteUser');
    Route::get('listUser','admin\userController@listUser')->name('listUser');
    Route::get('detail','admin\userDetailController@show')->name('userDetail');
    Route::get('addContact','admin\contactController@addContact')->name('addContact');
    Route::post('postContact','admin\contactController@postContact')->name('postContact');
    Route::get('showContact','admin\contactController@showContact')->name('showContact');
    Route::get('reactivateUser','admin\userController@reactivateUser')->name('reactivateUser');
    Route::get('reactivate','admin\userController@reactivate')->name('reactivate');
});
?>