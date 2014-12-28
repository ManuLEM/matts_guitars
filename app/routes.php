<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return View::make('hello');
});

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
{
    Route::get('/', array('as' => 'adminHome', 'uses' => 'AdminController@getHome'));
    Route::get('/guitars', array('as' => 'manageGuitars', 'uses' => 'AdminController@getGuitars'));
    Route::get('/articles', array('as' => 'manageArticles', 'uses' => 'AdminController@getArticles'));
    // I have to build the adding form for both guitars and articles now, then, I'll have the data needed to seed
    Route::get('/add-guitar', array('as' => 'getNewGuitar', 'uses' => 'AdminController@getGuitarForm'));
    Route::get('/add-article', array('as' => 'getNewArticles', 'uses' => 'AdminController@getArticleForm'));
    Route::post('/add-guitar', array('as' => 'postNewGuitar', 'uses' => 'AdminController@addGuitar'));
    Route::post('/add-article', array('as' => 'postNewArticle', 'uses' => 'AdminController@addArticle'));
});

Route::get('/login', array('as' => 'getLogin', 'uses' =>  'AdminController@getLogin'));
Route::post('/login', array('as' => 'postLogin', 'uses' =>  'AdminController@postLogin'));
