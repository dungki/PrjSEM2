<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('admin/index', function () {
//     return view('admin.index');
// })->name('index');
// Route::get('/', function () {
//     return redirect()->route('index');
// });
Route::get('layout', function () {
    return view('layout.main');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
