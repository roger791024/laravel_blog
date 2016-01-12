<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home.index' ,function () {
    return view('home.index');
}]);

Route::get('about', ['as' => 'about.index' ,function () {
    return view('about.about');
}]);

Route::get('contact', ['as' => 'contact.create' ,function () {
    return view('contact.contact');
}]);



Route::get('posts', ['as' => 'posts.index' ,'uses' => 'PostsController@index']);

Route::get('posts/create', ['as' => 'posts.create' ,'uses' =>'PostsController@create']);

Route::get('posts/{id}', ['as' => 'posts.show' ,'uses' => 'PostsController@show']);

Route::get('posts/{id}/edit', ['as' => 'posts.edit' ,'uses' => 'PostsController@edit']);



Route::get('random', ['as' => 'posts.random' ,function () {
    return view('welcome');
}]);


Route::post('contact', ['as' => 'contact.store' ,function () {
    return view('welcome');
}]);





Route::post('posts', ['as' => 'posts.store' ,function () {
    return view('welcome');
}]);


Route::patch('posts/{id}', ['as' => 'posts.update' ,function () {
    return view('welcome');
}]);

Route::delete('posts/{id}', ['as' => 'posts.destory' ,function () {
    return view('welcome');
}]);

Route::post('posts/{id}/comment', ['as' => 'posts.comment' ,function () {
    return view('welcome');
}]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
