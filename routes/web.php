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




Route::group(['middleware' => ['web']], function () {
    Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
    Route::get('blog/', 'BlogController@getIndex');
    Route::get('blog', ['uses' => 'BlogController@getIndex','as' => 'blog.index']);
    Route::get('/', 'PageController@getIndex');
    Route::resource('posts','PostController');
    //Authentication
    Route::get('auth/login', ['as'=>'login', 'uses'=>'Auth\LoginController@showLoginForm']);
    Route::post('auth/login', 'Auth\LoginController@postLogin');
    Route::get('auth/logout', ['as'=>'logout','uses'=>'Auth\LoginController@getLogout']);

    Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('auth/register', 'Auth\RegisterController@postRegister');

    //password Resets
    //Route::get('password/reset/{token?}', 'Auth\ForgotPasswordController@showRestForm');
    Route::post('password/email','Auth\passwordController@senResetLinkEmail');
    Route::post('password/reset','Auth\passwordcontroller@reset');

    //categories
    Route::resource('categories','CategoryController', ['except' => ['create']]);
    Route::resource('tags','TagController', ['except' => ['create']]);

});
Auth::routes();

//Route::get('/home', 'HomeController@index');
