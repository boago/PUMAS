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
<<<<<<< HEAD
Route::get('/uploadfile','UploadController@getView');
Route::post('/insertfile',array('as'=>'insertfile','uses'=>'UploadController@insertFile'));
=======


Route::get('userpage', 'UserPageController@index');
Route::resource('upload-files','FileController');

Route::get('/multiuploads', 'UploadController@uploadForm');

Route::post('/multiuploads','UploadController@uploadSubmit');
Route:: get('viewAlldownloadfile','DownloadController@downfunc');
<<<<<<< HEAD
Route:: get('test','TestController@index');
>>>>>>> f371f2ca7db70e73483ccdc51981ab6c4227f750
=======
Route::get('redirect',function(){
   return redirect()->route('viewAlldownloadfile');
});

Route::get('/uploadfile','UploadController@getView');
Route::post('/insertfile',array('as'=>'insertfile','uses'=>'UploadController@insertFile'));

/*
|start
*/
use App\User;
use Illuminate\Support\Facades\Input;

Route::post ( '/search', function () {
	$q = Input::get ( 'q' );
	if($q != ""){
		$user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->get ();
		if (count ( $user ) > 0)
			return view ( 'search' )->withDetails ( $user )->withQuery ( $q );
		else
			return view ( 'search' )->withMessage ( 'No Details found. Try to search again !' );
	}
	return view ( 'search' )->withMessage ( 'No Details found. Try to search again !' );
} );
/*
| end
*/
>>>>>>> f4312434a00d55f03a1cef628a607ab332d4f501
>>>>>>> 6c3bb629b311d1f42cd2cfa769ceefa31902f6f5
