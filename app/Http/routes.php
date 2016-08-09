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
//     return view('welcome');
// });

Route::get('/', function () {
    return view('web.login');
});

//Room
Route::get('admin/list/room', function() {
	return view('web.admin.room.list_room');
});
Route::get('admin/detail/room', function() {
	return view('web.admin.room.detail_room');
});
Route::get('admin/add/room', function() {
	return view('web.admin.room.add_room');
});

//Meeting
Route::get('admin/list/meeting', function() {
	return view('web.admin.meeting.list_meeting');
});
Route::get('admin/detail/meeting', function() {
	return view('web.admin.meeting.detail_meeting');
});
Route::get('admin/add/meeting', function() {
	return view('web.admin.meeting.add_meeting');
});
Route::get('admin/approve/form', function() {
	return view('web.admin.meeting.approve_form');
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