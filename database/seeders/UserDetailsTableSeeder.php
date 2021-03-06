<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_details')->delete();
        
        \DB::table('user_details')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'citizenship_country_id' => 1,
                'first_name' => 'Alex',
                'last_name' => 'Petro',
                'phone_number' => '0043664111111',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 4,
                'citizenship_country_id' => 1,
                'first_name' => 'Dominik',
                'last_name' => 'Allan',
                'phone_number' => '00436644444444',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 5,
                'citizenship_country_id' => 3,
                'first_name' => 'Andreas',
                'last_name' => 'Snow',
                'phone_number' => '004366455555555',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 7,
                'citizenship_country_id' => 5,
                'first_name' => 'Igor',
                'last_name' => 'Snow',
                'phone_number' => '0043664777777',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 6,
                'citizenship_country_id' => 1,
                'first_name' => 'Max',
                'last_name' => 'Mustermann',
                'phone_number' => '00436646666666',
            ),
        ));
        
        
    }
}