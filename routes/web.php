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

//Auth::routes();

Route::get('/home', 'HomeController@index');


Route::resource('/organization', 'OrganizationsController');

Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');

Route::get('/organizations', function (){
   return view('organizations');
});
<<<<<<< HEAD
=======

//Projects routes
Route::resource('/project', 'ProjectsController');


//share links to social media
Route::get('/share', function()
{
    return Share::load('http://www.wachiraweb.com', 'New blog post')->facebook();

    //return Share::load('http://www.example.com', 'Link description')->services('facebook', 'gplus', 'twitter');

});
>>>>>>> 6b1127bb64f32edcbeeeecdf8957eb4fd71c2e37
