<?php
// app/Providers/BookingServiceProvider.php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\BookingTools\BookingLib;

class BookingServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('BookingLib', function () {
            return new BookingLib;
        });
    }
}