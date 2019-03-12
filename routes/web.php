<?php

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


// --------------------------
//  認証関連
// --------------------------
// アプリケーションでユーザー登録が必要なければ、新しく作成されたRegisterControllerを削除し、
// ルート定義をAuth::routes(['register' => false]);のように変更すれば、無効にできます。
Auth::routes();

// 認証されている時、アクセス可能
Route::group(['middleware' => 'auth'], function() {

    Route::get('/home', 'HomeController@index')->name('home');

    // 認証されており、かつ、管理者権限のユーザーの時、アクセス可能
    Route::group(['middleware' => 'administrator'], function() {
        Route::get('/admin', 'HomeController@test')->name('admin');
    });
});
