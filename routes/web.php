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

Route::get('/index','Index\IndexController@index');

Route::get('/index/pay','Index\IndexController@alipay');        //去支付

Route::get('/index/alipay/return','Alipay\PayController@aliReturn');
Route::post('/index/alipay/notify','Alipay\PayController@notify');

Route::get('/index/accii','Index\IndexController@accii');
Route::get('/index/dec','Index\IndexController@dec');

Route::get('/index/userList','Index\IndexController@userList')->middleware('index');     //用户列表

