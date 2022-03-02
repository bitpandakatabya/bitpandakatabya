<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Austria',
                'iso2' => 'AT',
                'iso3' => 'AUT',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'France',
                'iso2' => 'FR',
                'iso3' => 'FRA',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Germany',
                'iso2' => 'DE',
                'iso3' => 'DEU',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Spain',
                'iso2' => 'ES',
                'iso3' => 'ESP',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Russian Federation',
                'iso2' => 'RU',
                'iso3' => 'RUS',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'China',
                'iso2' => 'CN',
                'iso3' => 'CHN',
            ),
        ));
        
        
    }
}