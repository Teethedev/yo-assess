<?php
// app/Facades/BookingLib.php.
namespace App\Facades;
use Illuminate\Support\Facades\Facade;
class BookingLib extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'BookingLib';
    }
}