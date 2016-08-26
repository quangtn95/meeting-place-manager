<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\MessageBag;
use Auth;
use App\User;
use Input;

class LoginController extends Controller
{
    public function getLogin() {
    	if(!Auth::check()) {
			return view('web.login');
    	}
    	else {
    		return redirect()->route('admin.room.getList');
    	}
    }

    public function postLogin(LoginRequest $request)
    {
        $errors = new MessageBag;
    	$login = [
	    	'username' => $request->username, 
	    	'password' => $request->password, 
	    	'role' => 1
    	];

        if (Auth::attempt($login)) {
            return redirect()->route('admin.room.getList');
        } else {
            $errors = new MessageBag(['password' => ['Username and/or password invalid.']]);
        	return redirect()->back()->withErrors($errors)->withInput(Input::except('password'));;
        }
    }

    public function getLogout() {
    	Auth::logout();
    	return redirect()->route('getLogin');
    }
}
