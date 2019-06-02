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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/bind', 'HomeController@bind');

Route::get('/bind_work', 'HomeController@bind_work');

Route::post('/bind_work', 'HomeController@do_bind_work');

Route::post('/unbind_wechat', 'HomeController@unbind_wechat');

Route::post('/unbind_work', 'HomeController@unbind_work');

Route::get('/sckey', 'HomeController@sckey');

Route::get('/list', 'HomeController@msg_list');

Route::get('/sckey/gen', 'HomeController@gen');

Route::any('/send/{sckey}', 'PushController@push');

Route::any('/wechat', 'WechatController@serve');

Route::get('/detail/{id}', 'WechatController@detail');

Route::get('/test', 'PushController@test');