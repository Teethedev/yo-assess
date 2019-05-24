<?php
// app/Facades/GuestLib.php.
namespace App\Facades;
use Illuminate\Support\Facades\Facade;
class GuestLib extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'GuestLib';
    }
}