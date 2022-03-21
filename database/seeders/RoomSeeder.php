<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\tagRoom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            [
                "img"=>"single/single1.jpg",
                "titre"=>"ISTANBUL",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing ..",
                "prix"=>"€89 / night",
                "category_room_id"=>1,
                "created_at"=>now(),
            ],
            [
                "img"=>"double/double.jpg",
                "titre"=>"TANGER",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing ..",
                "prix"=>"€129 / night",
                "category_room_id"=>2,
                "created_at"=>now(),
            ],
            [
                "img"=>"deluxe/deluxe.jpg",
                "titre"=>"TOKYO",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing ..",
                "prix"=>"€189 / night",
                "category_room_id"=>3,
                "created_at"=>now(),
            ],
            [
                "img"=>"family/family.jpg",
                "titre"=>"PARIS",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing ..",
                "prix"=>"€149 / night",
                "category_room_id"=>4,
                "created_at"=>now(),
            ],
            [
                "img"=>"king/king.jpg",
                "titre"=>"RIO DE JANEIRO",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing ..",
                "prix"=>"€289 / night",
                "category_room_id"=>1,
                "created_at"=>now(),
            ],
            [
                "img"=>"honeymoon/honeymoon.jpg",
                "titre"=>"SICILIA",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing ..",
                "prix"=>"€169 / night",
                "category_room_id"=>1,
                "created_at"=>now(),
            ],
            [
                "img"=>"view/view.jpg",
                "titre"=>"MOSCOU",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing ..",
                "prix"=>"€119 / night",
                "category_room_id"=>2,
                "created_at"=>now(),
            ],
            [
                "img"=>"luxury/luxury.jpg",
                "titre"=>"LONDON",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing ..",
                "prix"=>"€349 / night",
                "category_room_id"=>3,
                "created_at"=>now(),
            ],
            [
                "img"=>"small/small.jpg",
                "titre"=>"DUBAÎ",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing ..",
                "prix"=>"€39 / night",
                "category_room_id"=>4,
                "created_at"=>now(),
            ],
        ]);

        $rooms = Room::all();

        // me rajoute mes tag id en random
        tagRoom::all()->each(function ($tagRooms) use ($rooms) {
            $tagRooms->rooms()->attach(
            $rooms->random(rand(1, 3))->pluck('id')->toArray()
            );
        });

    }
}