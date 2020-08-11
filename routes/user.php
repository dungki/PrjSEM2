<?php
Route::group(['prefix' => 'user'], function () {
    Route::get('clock', 'user\timesheetController@clock')->name('clock')->middleware('auth');
    Route::post('addcheckin','user\timesheetController@addcheckin')->name('addcheckin')->middleware('auth');
    Route::post('addcheckout','user\timesheetController@addcheckout')->name('addcheckout')->middleware('auth');
    Route::get('profile', 'user\timesheetController@profile')->name('profile')->middleware('auth');
});

?>