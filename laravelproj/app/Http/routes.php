<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/article', 'ArticleController');
Route::post('/article/{article_id}/comment', 'CommentController@createComment'); //"@" is the method it goes to and calls that specific page.
													 // Have manually created the POST request hence can use the same
													// controller. The resource stuff functions only for new created stuff wtv.


Route::get('/article/{id}/comment/{cid}', 'CommentController@showComment');
Route::get('/article/{id}/comment/{cid}/edit', 'CommentController@editComment');
Route::put('/article/{id}/comment/{cid}', 'CommentController@updateComment');

Route::get('contact', 'PagesController@contact');

Route::get('about', 'PagesController@about');