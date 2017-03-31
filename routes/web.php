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
    return view('index');

});

Route::auth();


Route::get('/', 'HomePageController@index');

Route::auth();
Route::get('/logout', 'Auth\LoginController@logout');
//Auth::routes();

Route::get('/home', 'HomeController@index');


Route::resource('/organization', 'OrganizationsController');

Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');

Route::get('/organizations', function (){
   return view('organizations');
});


//Projects routes
Route::resource('/project', 'ProjectsController');


//share links to social media
Route::get('/share', function()
{

    //return Share::load('http://www.loocid.org', 'Share organization project')->facebook();

    return Share::load('http://www.loocid.org', 'Organization project name')->services('facebook', 'gplus', 'twitter', 'linkedin');
});

//fACEBOOK LOGIN
Route::get('auth/facebook', ['as' => 'auth/facebook', 'uses' => 'Auth\LoginController@redirectToProvider']);
Route::get('auth/facebook/callback', ['as' => 'auth/facebook/callback', 'uses' => 'Auth\LoginController@handleProviderCallback']);

