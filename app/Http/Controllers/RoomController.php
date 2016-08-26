<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoomRequest;
use DB;
use App\Room;
use App\Meeting;
use Input,File;

class RoomController extends Controller
{
	public function getList(){
		$data = Room::select('id', 'name', 'image', 'capacity', 'equipment')->orderBy('name', 'asc')->paginate(3);
        return view('web.admin.room.list_room',compact('data'));
	}

	public function getDetail($id) {

        $data = Meeting::with('room')
            ->where('meetings.room_id',$id)
            ->orderBy('meetings.time_start', 'asc')
            ->paginate(7);

        $list_data = $data->toArray()['data'];
        //dd($data);
        return view('web.admin.room.detail_room', compact('data', 'list_data'));
	}

    public function getAdd() {
    	return view('web.admin.room.add_room');
    }

    public function postAdd(RoomRequest $request) {
        $avatar = $request->file('image');
        $upload = 'public/uploads';
        $filename = $avatar->getClientOriginalName();
        $success = $avatar->move($upload, $filename);

        if($success){
            if(($request->get('equipment')) != null) {
                $room = new Room;
                $equipment = implode(', ', Input::get('equipment'));

                $room->name      = $request->Input('txtname');
                $room->capacity  = $request->Input('txtcapa');
                $room->equipment = $equipment;
                $room->image     = $filename;
                
                $room->save();
                return redirect()->route('admin.room.getList')->with(['flash_message'=>'Success !! Complete Add Room']);
            }else {
                $room = new Room;

                $room->name      = $request->Input('txtname');
                $room->capacity  = $request->Input('txtcapa');
                $room->equipment = "Trống";
                $room->image     = $filename;
                
                $room->save();
                return redirect()->route('admin.room.getList')->with(['flash_message'=>'Success !! Complete Add Room']);
            }
                
        }
        	
    }

    public function getEdit($id) {
    	$data = Room::findOrFail($id)->toArray();
    	return view('web.admin.room.edit_room', compact('data'));
    }

    public function postEdit(Request $request, $id) {
        $this->validate($request,
            ['txtname'=>'required'],
            ['txtname.required'=>'Please Enter Room Name !']
        );


        if(Input::hasfile('image')){
            $avatar = $request->file('image');
            $upload = 'public/uploads';
            $filename = $avatar->getClientOriginalName();
            $success = $avatar->move($upload, $filename);

            if($success) {
                if(($request->get('equipment')) != null) {
                    $room = Room::find($id);
                    $equipment = implode(', ', Input::get('equipment'));

                    $room->name      = $request->txtname;
                    $room->capacity  = $request->txtcapa;
                    $room->equipment = $equipment;
                    $room->image     = $filename;
                    $room->save();
                    return redirect()->route('admin.room.getList')->with(['flash_message'=>'Success !! Complete Edit Room']);
                }
                else{
                    $room = Room::find($id);

                    $room->name      = $request->txtname;
                    $room->capacity  = $request->txtcapa;
                    $room->equipment = "Trống";
                    $room->image     = $filename;
                    $room->save();
                    return redirect()->route('admin.room.getList')->with(['flash_message'=>'Success !! Complete Edit Room']);
                }
                    
            } else {
                return redirect()->route('admin.room.getList')->with(['flash_message'=>'Error']);
            }
        }else{
            if(($request->get('equipment')) != null) {
                $room = Room::find($id);
                $equipment = implode(', ', Input::get('equipment'));

                $room->name      = $request->txtname;
                $room->capacity  = $request->txtcapa;
                $room->equipment = $equipment;
                $room->save();
                return redirect()->route('admin.room.getList')->with(['flash_message'=>'Success !! Complete Edit Room']);
            }
            else {
                $room = Room::find($id);

                $room->name      = $request->txtname;
                $room->capacity  = $request->txtcapa;
                $room->equipment = "Trống";
                $room->save();
                return redirect()->route('admin.room.getList')->with(['flash_message'=>'Success !! Complete Edit Room']);
            }
                
        }
            
    }

    // public function getDelete($id) {
    // 	$room = Room::find($id);
    //     File::delete('public/uploads/'.$room->image);
    // 	$room->delete($id);
    // 	return redirect()->route('admin.room.getList')->with(['flash_message'=>'Success !! Complete Delete Room']);
    // }

    public function getDelete(Request $request, $id) {
        $room = Room::find($id);
        File::delete('public/uploads/'.$room->image);
        $room->delete($request->all());
    }
}
