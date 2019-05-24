<?php
// app/Providers/GuestServiceProvider.php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\BookingTools\GuestLib;

class GuestServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('GuestLib', function () {
            return new GuestLib;
        });
    }
}