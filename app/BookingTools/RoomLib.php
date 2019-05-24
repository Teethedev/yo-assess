<?php
// app/BookingTools/RoomLib.php
namespace App\BookingTools;
use App\Room;
  
class RoomLib
{

    public function room_status_update($room, $status)
    {
      $room_update = Room::find($room);
      $room_update->available = $status;
      $room_update->save();
      return $room_update; 
    }

    public function get_room($room_id)
    {
        $room = Room::where('id', '=', $room_id)->first();
        return $room;
    }
}