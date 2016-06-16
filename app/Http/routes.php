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
use App\User;



Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/Page', function() {
    
    return view('addPage');
});
Route::get('/home', function() {
    
    return view('home');
});

Route::get('/admin', function() {
    
    return view('admin.index');
});

Route::get('/admin/users/activate/{id}','usersController@activate' );
Route::resource('/admin/users','usersController');

Route::get('/admin/categories/activate/{id}','categoriesController@activate' );
Route::resource('/admin/categories', 'categoriesController');

Route::get('/admin/posts/activate/{id}','postsController@activate' );

Route::resource('/admin/posts', 'postsController');