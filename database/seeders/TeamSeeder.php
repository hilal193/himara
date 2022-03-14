<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                "fonction_id"=>1,
                "img"=>"HOUSEKEEPER",
                "fullname"=>"Jeanette Owens",
                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
            [
                "fonction_id"=>2,
                "img"=>"HOUSEKEEPER",
                "fullname"=>"Henry Garret",
                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
            [
                "fonction_id"=>3,
                "img"=>"HOUSEKEEPER",
                "fullname"=>"Tommy Alexander",
                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
            [
                "fonction_id"=>4,
                "img"=>"HOUSEKEEPER",
                "fullname"=>"Penny Soto",
                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
            [
                "fonction_id"=>5,
                "img"=>"HOUSEKEEPER",
                "fullname"=>"Alex Cox",
                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
            [
                "fonction_id"=>4,
                "img"=>"HOUSEKEEPER",
                "fullname"=>"Alfredo Romero",
                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
            [
                "fonction_id"=>6,
                "img"=>"HOUSEKEEPER",
                "fullname"=>"Glenda Gilbert",
                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
            [
                "fonction_id"=>7,
                "img"=>"HOUSEKEEPER",
                "fullname"=>"Sheila Carter",
                "description"=>"Lorem Ipsum which looks many web sites pass websites is therefore always.",
            ],
        ]);

    }
}
