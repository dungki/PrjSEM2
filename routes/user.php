<?php
Route::group(['prefix' => 'user'], function () {
    Route::get('clock', 'user\timesheetController@clock')->name('clock');
    Route::post('addcheckin','user\timesheetController@addcheckin')->name('addcheckin');
    Route::post('addcheckout','user\timesheetController@addcheckout')->name('addcheckout');
    Route::get('profile', 'user\timesheetController@profile')->name('profile');
});

?>