<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\MeetingRequest;
use App\Meeting;
use App\Room;
use Input;
use DB;
use Auth;
use Carbon\Carbon;

class MeetingController extends Controller
{
    public function getList(){
		$data = Meeting::select('id', 'name', 'time_start', 'time_end', 'num_people', 'description', 'room_id', 'user_id')
        ->orderBy('time_start', 'asc')->paginate(7);
		return view('web.admin.meeting.list_meeting', compact('data'));
	}

	public function getDetail($id) {
		$detail = DB::table('rooms')
					->join('meetings', 'rooms.id', '=', 'meetings.room_id')
					->join('users', 'meetings.user_id', '=', 'users.id')
					->select('meetings.*', 'rooms.name as room_name', 'users.username as users_name')
					->where('meetings.id',$id)->first();

		return view('web.admin.meeting.detail_meeting', compact('detail'));
	}

	public function getAdd() {
		$room = Room::select('id', 'name', 'capacity')->orderBy('capacity', 'asc')->get();
    	return view('web.admin.meeting.add_meeting', compact('room'));
    }

    public function postAdd(MeetingRequest $request) {
        
        $meeting = new Meeting;

        $meeting->name         = $request->Input('txtname');
        $meeting->time_start   = $request->Input('txtstart');
        $meeting->time_end     = $request->Input('txtend');
        $meeting->num_people   = $request->Input('txtnum');
        $meeting->description  = $request->Input('txtdes');
        $meeting->room_id      = $request->Input('txtroom');
        //$meeting->user_id      = 18;
        $meeting->user_id      = Auth::user()->id;
        
        $meeting->save();
        return redirect()->route('admin.meeting.getList')->with(['flash_message'=>'Success !! Complete Add Meeting']);
    }

    public function getEdit($id) {
        $meeting = Meeting::findOrFail($id)->toArray();
        $room = Room::select('id', 'name', 'capacity')->orderBy('capacity', 'asc')->get();
        return view('web.admin.meeting.edit_meeting', compact('meeting', 'room'));
    }

    public function postEdit(MeetingRequest $request, $id) {
        $meeting = Meeting::find($id);

        $meeting->name         = $request->Input('txtname');
        $meeting->time_start   = $request->Input('txtstart');
        $meeting->time_end     = $request->Input('txtend');
        $meeting->num_people   = $request->Input('txtnum');
        $meeting->description  = $request->Input('txtdes');
        $meeting->room_id      = $request->Input('txtroom');
        $meeting->user_id      = Auth::user()->id;
        $meeting->save();
        return redirect()->route('admin.meeting.getList')->with(['flash_message'=>'Success !! Complete Edit Meeting']);
            
    }

    // public function getDelete($id) {
    //     $meeting = Meeting::find($id);
    //     $meeting->delete($id);
    //     return redirect()->route('admin.meeting.getList')->with(['flash_message'=>'Success !! Complete Delete Meeting']);
    // }

    public function getDelete(Request $request, $id) {
        $meeting = Meeting::find($id);
        $meeting->delete($request->all());
    }
}
