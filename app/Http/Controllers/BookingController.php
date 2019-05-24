<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\BookingLib;
use App\Facades\GuestLib;
use App\Facades\RoomLib;
use App\Http\Requests\BookRequest;
use App\Http\Requests\CheckinRequest;

class BookingController extends Controller
{
    public function checkin(CheckinRequest $request){
             //check if guest booked before
             $check = GuestLib::guest_check($request->id_number);

             //Get guest_add
             $guest_id = GuestLib::guest_add($request, $check);

             $room = RoomLib::get_room($request->room);

             //book client
             if($room->available){
                BookingLib::booking_add($request, $guest_id);
                //update room availability 
                RoomLib::room_status_update($request->room, 0);
             }else{
                die("Room Not available for booking"); 
             }

              return view('guest_booked');
    }

    public function checkout(){
        echo "Checking out the client";
    }
}
