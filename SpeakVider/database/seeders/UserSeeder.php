<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['email' => 'user1@gmail.com', 'password' => 'user1', 'phoneNumber' => '1000', 'photo' => 'user1.jpg'],
            ['email' => 'user2@gmail.com', 'password' => 'user2', 'phoneNumber' => '2000', 'photo' => 'user2.jpg'],
            ['email' => 'user3@gmail.com', 'password' => 'user3', 'phoneNumber' => '3000', 'photo' => 'user3.jpg']
        ];

        DB::table('users')->insert($users);
    }
}
