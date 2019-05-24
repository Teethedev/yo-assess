<?php
// app/BookingTools/GuestLib.php
namespace App\BookingTools;
use App\Guest;
  
class GuestLib
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

}