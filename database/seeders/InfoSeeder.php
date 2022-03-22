<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert([
            [
                "adresse"=>"",
                "mail"=>"",
                "telephone"=>"",
                "fax"=>"",
                "site"=>"",
            ],
        ])

    }
}
