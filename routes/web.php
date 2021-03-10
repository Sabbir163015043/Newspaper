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


Route::get('/',[
    'uses'  => 'App\Http\Controllers\NewsController@index',
    'as'    => '/',
]);

Route::get('/single-page/{id}',[
    'uses' => 'App\Http\Controllers\NewsController@singlePage',
    'as'   => 'single-page',
]);

Route::get('/new-detail/{id}',[
    'uses' => 'App\Http\Controllers\NewsController@newDetail',
    'as'   => 'new-detail',
]);



Route::get('/dashboard',[
    'uses'        => 'App\Http\Controllers\DashboardController@index',
    'as'          => 'dashboard',
    'middleware'  => ['auth:sanctum','verified']
]);

Route::get('/add-category',[
    'uses'        => 'App\Http\Controllers\CategoryController@index',
    'as'          => 'add-category',
    'middleware'  => ['auth:sanctum','verified']
]);
Route::post('/new-category',[
    'uses'        => 'App\Http\Controllers\CategoryController@create',
    'as'          => 'new-category',
    'middleware'  => ['auth:sanctum','verified']
]);

Route::get('/manage-category',[
    'uses'        => 'App\Http\Controllers\CategoryController@manage',
    'as'          => 'manage-category',
    'middleware'  => ['auth:sanctum','verified']
]);

Route::get('/edit-category/{id}',[
    'uses'        => 'App\Http\Controllers\CategoryController@edit',
    'as'          => 'edit-category',
    'middleware'  => ['auth:sanctum','verified']
]);

Route::get('/delete-category/{id}',[
    'uses'        => 'App\Http\Controllers\CategoryController@delete',
    'as'          => 'delete-category',
    'middleware'  => ['auth:sanctum','verified']
]);

Route::post('/update-category',[
    'uses'        => 'App\Http\Controllers\CategoryController@update',
    'as'          => 'update-category',
    'middleware'  => ['auth:sanctum','verified']
]);

Route::get('/add-news',[
    'uses'        => 'App\Http\Controllers\DetailsController@index',
    'as'          => 'add-news',
    'middleware'  => ['auth:sanctum','verified']
]);
Route::get('/new-national',[
    'uses'        => 'App\Http\Controllers\DetailsController@row',
    'as'          => 'new-national',
    'middleware'  => ['auth:sanctum','verified']
]);

Route::post('/new-news',[
    'uses'        => 'App\Http\Controllers\DetailsController@create',
    'as'          => 'new-news',
    'middleware'  => ['auth:sanctum','verified']
]);

Route::get('/manage-news',[
    'uses'        => 'App\Http\Controllers\DetailsController@manage',
    'as'          => 'manage-news',
    'middleware'  => ['auth:sanctum','verified']
]);

Route::get('/view-news-detail/{id}',[
    'uses'        => 'App\Http\Controllers\DetailsController@detail',
    'as'          => 'view-news-detail',
    'middleware'  => ['auth:sanctum','verified']
]);

Route::get('/edit-news/{id}',[
    'uses'        => 'App\Http\Controllers\DetailsController@edit',
    'as'          => 'edit-news',
    'middleware'  => ['auth:sanctum','verified']
]);

Route::get('/delete-news/{id}',[
    'uses'        => 'App\Http\Controllers\DetailsController@delete',
    'as'          => 'delete-news',
    'middleware'  => ['auth:sanctum','verified','sabbir']
]);

Route::post('/update-news',[
    'uses'        => 'App\Http\Controllers\DetailsController@update',
    'as'          => 'update-news',
    'middleware'  => ['auth:sanctum','verified']
]);
Route::get('/add-user',[
    'uses'        => 'App\Http\Controllers\UserController@index',
    'as'          => 'add-user',
    'middleware'  => ['auth:sanctum','verified','sabbir']
]);

Route::post('/new-user',[
    'uses'        => 'App\Http\Controllers\UserController@create',
    'as'          => 'new-user',
    'middleware'  => ['auth:sanctum','verified','sabbir']
]);
Route::get('/manage-user',[
    'uses'        => 'App\Http\Controllers\UserController@manage',
    'as'          => 'manage-user',
    'middleware'  => ['auth:sanctum','verified','sabbir']
]);

Route::get('/edit-user/{id}',[
    'uses'        => 'App\Http\Controllers\UserController@edit',
    'as'          => 'edit-user',
    'middleware'  => ['auth:sanctum','verified','sabbir']
]);

Route::post('/update-user/{id}',[
    'uses'        => 'App\Http\Controllers\UserController@update',
    'as'          => 'update-user',
    'middleware'  => ['auth:sanctum','verified','sabbir']
]);

Route::get('/delete-user/{id}',[
    'uses'        => 'App\Http\Controllers\UserController@delete',
    'as'          => 'delete-user',
    'middleware'  => ['auth:sanctum','verified','sabbir']
]);



