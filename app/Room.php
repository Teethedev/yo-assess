<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /**
     * Get the booking record associated with the room.
     */
    public function booking()
    {
        return $this->hasOne('App\Booking');
    }
}
