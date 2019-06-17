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

//後台 學校
Route::get('btschool','SchoolController@getIndex'); //到後台->學校
Route::post('btschool','SchoolController@save');

Route::get('school','SchoolController@schools'); //所有學校

Route::get('btscholarship','ScholarshipController@getIndex');
Route::get('scholarship','ScholarshipController@scholarship');

Route::post('btscholarship','ScholarshipController@save');

Route::get('index','IndexController@getIndex');//前台 首頁
Route::get('search','SearchController@getIndex');//前台 首頁



// Route::post('btschool','SchoolController@edit'); //編輯學校訊息
// Route::post('btschool','SchoolController@add'); //新增學校
// Route::post('btschool','SchoolController@excel'); //匯入學校