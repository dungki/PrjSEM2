<?php

Route::group(['prefix' => 'user/salary'], function () {
    Route::get('list', 'user\salaryController@list')->name('userListSalary')->middleware('auth');
    Route::get('detail', 'user\salaryController@detail')->name('userDetailSalary')->middleware('auth');
});

?>