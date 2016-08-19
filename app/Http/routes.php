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
    //Route::get('', ['as'=>'login', 'uses'=>'LoginController@login']);
    Route::get('', ['as'=>'getLogin', 'uses'=>'Auth\AuthController@getLogin']);
    Route::post('', ['as'=>'postLogin', 'uses'=>'Auth\AuthController@postLogin']);
});


//Room
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
});


//Meeting
Route::group(['prefix'=>'admin'], function() {
	Route::group(['prefix'=>'meeting'], function() {
		Route::get('list', ['as'=>'admin.meeting.getList', 'uses'=>'MeetingController@getList']);
		Route::get('detail/{id}',['as'=>'admin.meeting.getDetail', 'uses'=>'MeetingController@getDetail']);

		Route::get('add', ['as'=>'admin.meeting.getAdd', 'uses'=>'MeetingController@getAdd']);
		Route::post('add', ['as'=>'admin.meeting.postAdd', 'uses'=>'MeetingController@postAdd']);

		Route::get('edit/{id}', ['as'=>'admin.meeting.getEdit', 'uses'=>'MeetingController@getEdit']);
		Route::post('edit/{id}', ['as'=>'admin.meeting.postEdit', 'uses'=>'MeetingController@postEdit']);

		Route::get('delete/{id}', ['as'=>'admin.meeting.getDelete', 'uses'=>'MeetingController@getDelete']);

		//Route::get('delete/{id}', ['as'=>'admin.room.getDelete', 'uses'=>'RoomController@getDelete']);
	});
});


//User
Route::get('admin/list/user', function() {
	return view('web.admin.user.list_user');
});
Route::get('admin/detail/user', function() {
	return view('web.admin.user.detail_user');
});
Route::get('admin/add/user', function() {
	return view('web.admin.user.add_user');
});
Route::get('admin/edit/pass', function() {
	return view('web.admin.user.edit_pass');
});


//Search
Route::get('admin/search', function() {
	return view('web.admin.search.search');
});
Route::get('admin/search', ['as'=>'admin.search', 'uses'=>'SearchController@getSearch']);