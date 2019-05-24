<?php
// app/Facades/RoomLib.php.
namespace App\Facades;
use Illuminate\Support\Facades\Facade;
class RoomLib extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'RoomLib';
    }
}