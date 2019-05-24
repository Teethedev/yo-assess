<?php
// app/Providers/RoomServiceProvider.php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\BookingTools\RoomLib;

class RoomServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('RoomLib', function () {
            return new RoomLib;
        });
    }
}