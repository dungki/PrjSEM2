<?php


Route::group(['prefix' => 'admin/bonus'], function () {
    Route::get('show', 'admin\bonusController@show')->name('show')->middleware('auth');   
    Route::get('add', 'admin\bonusController@showForm')->name('showForm')->middleware('auth');   
    Route::post('insert', 'admin\bonusController@save')->name('insertBonus')->middleware('auth');   
    Route::get('edit', 'admin\bonusController@edit')->name('editBonus')->middleware('auth');   
    Route::get('delete', 'admin\bonusController@delete')->name('deleteBonus')->middleware('auth');   
    Route::get('bonusHistory', 'admin\bonusController@bonusHistory')->name('bonusHistory')->middleware('auth');   

});