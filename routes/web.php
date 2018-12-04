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

Route::get('/', [
    'uses' => 'NavigationController@home',
    'as' => 'home'
]);


Route::get('/maladie', [
    'uses' => 'NavigationController@maladie',
    'as' => 'maladie'
]);

Route::get('/association', [
    'uses' => 'NavigationController@association',
    'as' => 'association'
]);


Route::get('/services', [
    'uses' => 'NavigationController@services',
    'as' => 'services'
]);


Route::get('/blog',[
    'uses' => 'AnnouncementsController@index',
    'as' => 'blog'
]);
Route::get('/blog/article/article-{slug}',[
    'uses' => 'AnnouncementsController@single',
    'as' => 'blog-single'
]);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
