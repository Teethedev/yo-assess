<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /**
     * Get the room record associated with the booking.
     */
    public function room()
    {
        return $this->hasOne('App\Room');
    }

    /**
     * Get the guest record associated with the booking.
     */
    public function guest()
    {
        return $this->hasOne('App\Guest');
    }
}
