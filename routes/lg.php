<?php

Route::group(['prefix' => 'lg'], function () {
    Route::get('login', 'loginController@showLogin')->name('showLogin');
});
?>