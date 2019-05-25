<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Facades\RoomLib;

class RoomTest extends TestCase
{
    /**
     * Test Get Rooms (safer to test that it returns rooms instead of checking how many. This is just for demo)
     *
     * @return void
     */
    public function testGetRooms()
    {
        $rooms = RoomLib::get_rooms();
        $this->assertCount(6, $rooms);
    }

    /**
     * Test Room Status Update
     *
     * @return void
     */
    public function testRoomStatusUpdate()
    {
        $room_status_update = RoomLib::room_status_update(31, 1);
        $this->assertEquals(1, $room_status_update->available);
    }

    /**
     * Test Get Room
     *
     * @return void
     */
    public function testGetRoom()//can be written better
    {
        $room = RoomLib::get_room(31);
        $this->assertEquals(31, $room->id);
    }
}
