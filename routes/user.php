<?php
Route::group(['prefix' => 'user'], function () {
    Route::get('clock', 'user\timesheetController@clock')->name('clock');
    Route::post('addTimesheet','user\timesheetController@addTimesheet')->name('addTimesheet');
    Route::get('profile', 'user\timesheetController@profile')->name('profile');
});

?>