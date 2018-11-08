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
    return view('home');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('my-home', 'HomeController@myHome');
Route::get('my-users', 'HomeController@myUsers');
<<<<<<< HEAD
Route::get('/uploadfile','UploadController@getView');
Route::post('/insertfile',array('as'=>'insertfile','uses'=>'UploadController@insertFile'));
=======

Route::get('userpage', 'UserPageController@index');
Route::resource('upload-files','FileController');

Route::get('/multiuploads', 'UploadController@uploadForm');

Route::post('/multiuploads','UploadController@uploadSubmit');
Route:: get('viewAlldownloadfile','DownloadController@downfunc');
Route:: get('test','TestController@index');
>>>>>>> f371f2ca7db70e73483ccdc51981ab6c4227f750
