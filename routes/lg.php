<?php

Route::group(['prefix' => 'lg'], function () {
    Route::get('login', 'loginController@showLogin')->name('showLogin');
    Route::get('welcome', 'loginController@welcome')->name('HRMWelcome');
});
?>