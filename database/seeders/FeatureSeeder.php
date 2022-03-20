<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            [
                "nom"=>"BreakFast",
                "icon"=>"fa fa-coffee",
                "description"=>"breakfast included",
            ],
            [
                "nom"=>"WIFI",
                "icon"=>"fa fa-wifi",
                "description"=>"free wifi",
            ],
            [
                "nom"=>"TV",
                "icon"=>"fa fa-television",
                "description"=>"Plasma TV with cable channels",
            ],
            [
                "nom"=>"Bathroom",
                "icon"=>"fa fa-bath",
                "description"=>"2 bathrooms",
            ],
            [
                "nom"=>"DOUBLE BED",
            ],
            [
                "nom"=>"80 SQ MT",
            ],
            [
                "nom"=>"3 PERSONS",
            ],
            [
                "nom"=>"FREE INTERNET",
            ],
            [
                "nom"=>"PRIVATE BALCONY",
            ],
            [
                "nom"=>"FREE NEWSPAPER",
            ],
            [
                "nom"=>"FLAT SCREEN TV",
            ],
            [
                "nom"=>"BEACH VIEW",
            ],
            [
                "nom"=>"FULL AC",
            ],
            [
                "nom"=>"ROOM SERVICE",
            ],

        ]);

    }
}
