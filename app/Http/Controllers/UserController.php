<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Department;
use App\User;
use DB;
use Hash;

class UserController extends Controller
{
    // public function getList() {
    //     $data = User::select('id', 'username', 'email', 'role')->orderBy('role', 'asc')->paginate(7);
    // 	return view('web.admin.user.list_user', compact('data'));
    // }

    public function getList() {

        $data = User::with('department')
            ->orderBy('users.role', 'asc')
            ->paginate(6);

        $list_data = $data->toArray()['data'];
        //dd($list_data);
        return view('web.admin.user.list_user', compact('data', 'list_data'));
    }

    public function getDetail($id) {
        $detail = DB::table('users')
                    ->join('departments', 'users.dep_id', '=', 'departments.id')
                    ->select('users.*', 'departments.name as dep_name')
                    ->where('users.id',$id)->first();
                    
        //dd($detail);
        return view('web.admin.user.detail_user', compact('detail'));
    }

    public function getAdd() {
        $dep = Department::select('id', 'name')->orderBy('name', 'asc')->get();
    	return view('web.admin.user.add_user', compact('dep'));
    }

    public function postAdd(UserRequest $request) {
    	$user = new User;

        $user->username       = $request->Input('txtusername');
        $user->email          = $request->Input('txtemail');
        $user->password       = Hash::make($request->Input('txtpass'));
        $user->role           = $request->Input('rdorole');
        $user->dep_id         = $request->Input('txtdep');
        $user->remember_token = $request->_token;
        
        $user->save();
        return redirect()->route('admin.user.getList')->with(['flash_message'=>'Success !! Complete Add User']);
    }

    public function getEdit($id) {
        $dep = Department::select('id', 'name')->orderBy('name', 'asc')->get();
        $data = User::findOrFail($id)->toArray();
        return view('web.admin.user.edit_user', compact('dep', 'data'));
    }

    public function postEdit(Request $request, $id) {
       // dd($request);
        $this->validate($request,
            ['txtusername' => 'required',
            'txtpass'      =>'required|min:8',
            'txtpassret'   =>'required|same:txtpass',
            'txtemail'     =>'required|regex:/^[a-z][a-z0-9]*(_[a-z0-9]+)*(\.[a-z0-9]+)*@[a-z0-9]([a-z0-9-][a-z0-9]+)*(\.[a-z]{2,4}){1,2}$/'
            ],
            ['txtusername.required'=>'Please Enter Username',
            'txtpass.required'     =>'Please Enter Password',
            'txtpassret.required'  => 'Please Enter Re-Password',
            'txtpassret.same'      => 'Two Password Don\'t Match',
            'txtemail.required'    => 'Please Enter Email',
            'txtemail.regex'       => 'Email Error Syntax'
            ]
        );

    	$user = User::find($id);

        $user->username       = $request->Input('txtusername');
        $user->email          = $request->Input('txtemail');
        $user->password       = Hash::make($request->Input('txtpass'));
        $user->role           = $request->Input('rdorole');
        $user->dep_id         = $request->Input('txtdep');
        $user->remember_token = $request->_token;
        
        $user->save();
        return redirect()->route('admin.user.getList')->with(['flash_message'=>'Success !! Complete Update']);
    }

    // public function getDelete($id) {
    //     $user = User::find($id);
    //     $user->delete($id);
    //     return redirect()->route('admin.user.getList')->with(['flash_message'=>'Success !! Complete Delete User']);
    // }

    public function getDelete(Request $request, $id) {
        $user = User::find($id);
        $user->delete($request->all());
    }
}
