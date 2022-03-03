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
                'name' => 'Administrator',
                'email' => 'admin@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JgpqegDUTHg.uCJjkV396O2jPbJCbHxWz3RPk5p5jgBKQYIDOy2wK',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'PZg7AyFa50yVKnl3P93daQkLyx3Ahx1OLJ3PN9oQHZPlFrNpi9CUr33QOXbS',
                'address' => NULL,
                'house_num' => NULL,
                'phone_num' => '061143588',
                'city' => NULL,
                'profile_photo_path' => NULL,
                'role' => 'ADMIN',
                'current_team_id' => 1,
                'created_at' => '2022-02-28 02:31:05',
                'updated_at' => '2022-03-03 14:29:25',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'User',
                'email' => 'user@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SkNjVav56vQV1nV.49nOSe0/PWcB.sib5yjA9REX5EIyQNWupk.AW',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'address' => 'Jln. Tangkul 2 gg. Kemenangan No. 5',
                'house_num' => '5',
                'phone_num' => '085277256961',
                'city' => 'Medan',
                'profile_photo_path' => 'assets/user/2hKP3EdLC3UW5MUzOdvSKscdR7bEwADymtCoitIs.jpg',
                'role' => 'USER',
                'current_team_id' => NULL,
                'created_at' => '2022-03-03 11:54:30',
                'updated_at' => '2022-03-03 14:28:59',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}