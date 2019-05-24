<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    /**
     * Get the booking record associated with the guest.
     */
    public function booking()
    {
        return $this->hasOne('App\Booking');
    }
}
