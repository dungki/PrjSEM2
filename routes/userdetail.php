<?php

Route::group(['prefix' => 'admin/user'], function () {
    Route::get('listUser','userDetailController@listUser')->name('listUser');

    Route::get('detail','userDetailController@show')->name('userDetail');
});
?>