<?php

Route::group(['prefix' => 'admin/salary'], function () {
    Route::get('paySalary','admin\salaryController@paySalary')->name('paySalary')->middleware('auth');
    Route::get('reactiveSalary','admin\salaryController@reactiveSalary')->name('reactiveSalary')->middleware('auth');
    Route::get('updateSalary','admin\salaryController@updateSalary')->name('updateSalary')->middleware('auth');
    Route::get('listSalary','admin\salaryController@listSalary')->name('listSalary')->middleware('auth');
    Route::get('autoResetSalary','admin\salaryController@autoResetSalary')->name('autoResetSalary')->middleware('auth');
    Route::get('listSalaryHistory','admin\salaryController@listSalaryHistory')->name('listSalaryHistory')->middleware('auth');
});
?>