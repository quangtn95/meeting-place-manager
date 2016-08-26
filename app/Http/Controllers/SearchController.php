<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Room;

class SearchController extends Controller
{
    public function getSearch() {
    	$room = Room::select('id', 'name')->orderBy('name', 'asc')->get();
    	return view('web.admin.search.search', compact('room'));
    }

    public function postSearch(Request $request) {
    	$this->validate($request,
            ['txtnum'=>'required'],
            ['txtnum.required'=>'Please Enter Number People !']
        );
    }
}
