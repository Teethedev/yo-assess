<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Facades\BookingLib;
use App\Facades\GuestLib;
use App\Facades\RoomLib;
use App\Http\Requests\BookRequest;

class GuestController extends Controller
{
    /**
     * get all guests
     *
     * @return Response
     */
    public function index()
    {
        $guests = Guest::all();
        return view('guests')
               ->with('guests', $guests);
    }

    /**
     * Show the form.
     *
     * @return Response
     */
    public function get_id_number($id)
    {
        return view('identity')
               ->with('id', $id);
    }

    public function add_info(BookRequest $request){
            //check if guest booked before
            $check = GuestLib::guest_check($request->id_number);
            
            if($check === null){
               //Redirect to get more info
               return Redirect::to('/guest/book/info')->withInput(Input::all());
            }else{
                session()->flash('guest_data', $check);
                return Redirect::to('/guest/book/checkin')->withInput(Input::all());
            }
    }

    public function more_info(){
       return view('more_info');
    }

    public function add_check_in(){
         $guest = $user_id  = session()->get('guest_data');
         return view('add_check_in')->with('guest', $guest);
    }

}
