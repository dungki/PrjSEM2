<?php
Route::group(['prefix' => 'user'], function () {
    Route::get('bonusList','user\bonusController@show' )->name('userBonusList')->middleware('auth');;
});

?>