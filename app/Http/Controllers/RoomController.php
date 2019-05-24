<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Room;

class RoomController extends Controller
{
    /**
     * Show the form.
     *
     * @return Response
     */
    public function index()
    {
        $rooms = Room::all();
        return view('index')
               ->with('rooms', $rooms);
    }

}
