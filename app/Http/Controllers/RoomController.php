<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoomRequest;
use App\Room;
use Input;

class RoomController extends Controller
{
	public function getList(){
		$data = Room::select('id', 'name', 'image', 'capacity', 'equipment')->orderBy('name', 'asc')->get();
		return view('web.admin.room.list_room',compact('data'));
	}

	public function getDetail() {
		return view('web.admin.room.detail_room');
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
    	//$data2 = Room::select('id', 'name', 'image', 'capacity', 'equipment')->get()->toArray();
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
            $room = Room::find($id);
            $equipment = implode(', ', Input::get('equipment'));

            $room->name      = $request->txtname;
            $room->capacity  = $request->txtcapa;
            $room->equipment = $equipment;
            $room->save();
            return redirect()->route('admin.room.getList')->with(['flash_message'=>'Success !! Complete Edit Room']);
        }
            
    }

    public function getDelete($id) {
    	$room = Room::find($id);
    	$room->delete($id);
    	return redirect()->route('admin.room.getList')->with(['flash_message'=>'Success !! Complete Delete Room']);
    }
}
