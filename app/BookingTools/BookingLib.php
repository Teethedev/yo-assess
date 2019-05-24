<?php
// app/BookingTools/BookingLib.php
namespace App\BookingTools;
use App\Guest;
use App\Booking;
use App\Room;
  
class BookingLib
{
    public function guest_check($id_number)
    {
      $check = Guest::where('id_number', '=', $id_number)->first();
      return $check; 
    }

    public function guest_set($request)
    {
      $guest = new Guest;
      $guest->first_name = $request->first_name;
      $guest->last_name = $request->last_name;
      $guest->id_number = $request->id_number;
      $guest->save();
      return $guest; 
    }

    public function booking_add($request, $guest_id)
    {
      $booking = new Booking;
      $booking->guest_id = $guest_id;
      $booking->room = $request->room;
      $booking->check_in = $request->check_in;
      $booking->save();
      return $booking; 
    }

    public function room_status_update($room, $status)
    {
      $room_update = Room::find($room);
      $room_update->available = $status;
      $room_update->save();
      return $room_update; 
    }

    public function guest_add($request, $check)
    {
      $guest_id = 0;
      //Add the guest_add
      if($check === null){
        $guest = $this->guest_set($request);
        $guest_id = $guest->id;
      }else{
        $guest_id = $check->id;  
       }
       return $guest_id;
    }

    public function get_room($room_id)
    {
        $room = Room::where('id', '=', $room_id)->first();
        return $room;
    }
}