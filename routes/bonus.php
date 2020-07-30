<?php


Route::group(['prefix' => 'admin/bonus'], function () {
    Route::get('show', 'admin\bonusController@show')->name('show');   
    Route::get('add', 'admin\bonusController@showForm')->name('showForm');   
    Route::post('insert', 'admin\bonusController@insert')->name('insertBonus');   
});