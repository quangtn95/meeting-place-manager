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

// Route::get('/', function () {
//     return view('web.login');
// });

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);

Route::group(['prefix'=>'/'], function () {
    Route::get('', ['as'=>'getLogin', 'uses'=>'LoginController@getLogin']);
    Route::post('', ['as'=>'postLogin', 'uses'=>'LoginController@postLogin']);
    Route::get('logout', ['as'=>'getLogout', 'uses'=>'LoginController@getLogout']);
});

// Route::group(['prefix'=>'/'], function () {
//     Route::get('', ['as'=>'getLogin', 'uses'=>'Auth\AuthController@getLogin']);
//     Route::post('', ['as'=>'postLogin', 'uses'=>'Auth\AuthController@postLogin']);
// });


// Route::group(['middleware' => 'auth'], function() {
	Route::group(['prefix'=>'admin'], function() {
		Route::group(['prefix'=>'room'], function() {
			Route::get('list', ['as'=>'admin.room.getList', 'uses'=>'RoomController@getList']);
			Route::get('detail/{id}',['as'=>'admin.room.getDetail', 'uses'=>'RoomController@getDetail']);

			Route::get('add', ['as'=>'admin.room.getAdd', 'uses'=>'RoomController@getAdd']);
			Route::post('add', ['as'=>'admin.room.postAdd', 'uses'=>'RoomController@postAdd']);

			Route::get('edit/{id}', ['as'=>'admin.room.getEdit', 'uses'=>'RoomController@getEdit']);
			Route::post('edit/{id}', ['as'=>'admin.room.postEdit', 'uses'=>'RoomController@postEdit']);

			Route::get('delete/{id}', ['as'=>'admin.room.getDelete', 'uses'=>'RoomController@getDelete']);
		});

		Route::group(['prefix'=>'meeting'], function() {
			Route::get('list', ['as'=>'admin.meeting.getList', 'uses'=>'MeetingController@getList']);
			Route::get('detail/{id}',['as'=>'admin.meeting.getDetail', 'uses'=>'MeetingController@getDetail']);

			Route::get('add', ['as'=>'admin.meeting.getAdd', 'uses'=>'MeetingController@getAdd']);
			Route::post('add', ['as'=>'admin.meeting.postAdd', 'uses'=>'MeetingController@postAdd']);

			Route::get('edit/{id}', ['as'=>'admin.meeting.getEdit', 'uses'=>'MeetingController@getEdit']);
			Route::post('edit/{id}', ['as'=>'admin.meeting.postEdit', 'uses'=>'MeetingController@postEdit']);

			Route::get('delete/{id}', ['as'=>'admin.meeting.getDelete', 'uses'=>'MeetingController@getDelete']);

		});

		Route::group(['prefix'=>'user'], function() {
			Route::get('list', ['as'=>'admin.user.getList', 'uses'=>'UserController@getList']);
			Route::get('detail/{id}',['as'=>'admin.user.getDetail', 'uses'=>'UserController@getDetail']);

			Route::get('add', ['as'=>'admin.user.getAdd', 'uses'=>'UserController@getAdd']);
			Route::post('add', ['as'=>'admin.user.postAdd', 'uses'=>'UserController@postAdd']);

			Route::get('edit/{id}', ['as'=>'admin.user.getEdit', 'uses'=>'UserController@getEdit']);
			Route::post('edit/{id}', ['as'=>'admin.user.postEdit', 'uses'=>'UserController@postEdit']);

			Route::get('delete/{id}', ['as'=>'admin.user.getDelete', 'uses'=>'UserController@getDelete']);
		});

		Route::get('search', ['as'=>'admin.getSearch', 'uses'=>'SearchController@getSearch']);
		Route::post('search', ['as'=>'admin.postSearch', 'uses'=>'SearchController@postSearch']);
		
	});

	
//});
	
