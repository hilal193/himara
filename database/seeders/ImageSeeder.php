<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('images')->insert([
            [
                "nom"=>"cocktail",
                "url"=>"",
                "categorie_id"=>1,
                "created_at"=>now(),
            ],
            [
                "nom"=>"chambre",
                "url"=>"",
                "categorie_id"=>4,
                "created_at"=>now(),

            ],
            [
                "nom"=>"piscine",
                "url"=>"",
                "categorie_id"=>2,
                "created_at"=>now(),

            ],
            [
                "nom"=>"spa",
                "url"=>"",
                "categorie_id"=>3,
                "created_at"=>now(),

            ],
        ]);

    }
}
