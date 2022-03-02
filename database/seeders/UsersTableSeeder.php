<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'email' => 'alex@tempmail.com',
                'active' => 1,
                'created_at' => '2020-01-19 16:08:59',
                'updated_at' => '2020-01-19 16:08:59',
            ),
            1 => 
            array (
                'id' => 2,
                'email' => 'maria@tempmail.com',
                'active' => 1,
                'created_at' => '2020-01-19 16:08:59',
                'updated_at' => '2020-01-19 16:08:59',
            ),
            2 => 
            array (
                'id' => 3,
                'email' => 'john@tempmail.com',
                'active' => 1,
                'created_at' => '2020-01-19 16:08:59',
                'updated_at' => '2020-01-19 16:08:59',
            ),
            3 => 
            array (
                'id' => 4,
                'email' => 'dominik@test.com',
                'active' => 0,
                'created_at' => '2020-01-19 16:08:59',
                'updated_at' => '2020-01-19 16:08:59',
            ),
            4 => 
            array (
                'id' => 5,
                'email' => 'andreas@yahoo.de',
                'active' => 0,
                'created_at' => '2020-01-19 16:08:59',
                'updated_at' => '2020-01-19 16:08:59',
            ),
            5 => 
            array (
                'id' => 6,
                'email' => 'Taaaaaaa@test.com',
                'active' => 1,
                'created_at' => '2020-01-19 16:08:59',
                'updated_at' => '2020-01-19 16:08:59',
            ),
            6 => 
            array (
                'id' => 7,
                'email' => 'rerere@test_mail.com',
                'active' => 1,
                'created_at' => '2020-01-19 16:08:59',
                'updated_at' => '2020-01-19 16:08:59',
            ),
        ));
        
        
    }
}