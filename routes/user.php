<?php
Route::group(['prefix' => 'user'], function () {
    Route::get('clock', 'user\timesheetController@clock')->name('clock')->middleware('auth');
    Route::post('addcheckin','user\timesheetController@addcheckin')->name('addcheckin')->middleware('auth');
    Route::post('addcheckout','user\timesheetController@addcheckout')->name('addcheckout')->middleware('auth');
    Route::get('profile', 'user\timesheetController@profile')->name('profile')->middleware('auth');
    Route::get('addcontact', 'user\contactController@addcontact')->name('userAddContact')->middleware('auth');
    Route::post('postContact', 'user\contactController@postContact')->name('postContact');
    Route::get('contact', 'user\contactController@showcontact')->name('userShowContact')->middleware('auth');
    Route::get('editcontact', 'user\contactController@editContact')->name('editContact')->middleware('auth');
    Route::get('deletecontact', 'user\contactController@deleteContact')->name('deleteContact')->middleware('auth');
    Route::get('editProfile', 'user\contactController@editProfile')->name('editProfile')->middleware('auth');
    Route::post('saveProfile', 'user\contactController@saveProfile')->name('saveProfile');
});

?>