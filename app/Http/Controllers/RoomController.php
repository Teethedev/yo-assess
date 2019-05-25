<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Facades\RoomLib;

class RoomController extends Controller
{
    /**
     * Show the form.
     *
     * @return Response
     */
    public function index()
    {
        $rooms = RoomLib::get_rooms();
        return view('index')
               ->with('rooms', $rooms);
    }

}
