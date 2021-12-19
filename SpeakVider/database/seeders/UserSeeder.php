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
            ['email' => 'admin@speakvider.com', 'password' => 'admin', 'role' => 'admin', 'phoneNumber' => '1111'],
            ['email' => 'user1@gmail.com', 'password' => 'user1', 'role' => 'user', 'phoneNumber' => '1000'],
            ['email' => 'user2@gmail.com', 'password' => 'user2', 'role' => 'user', 'phoneNumber' => '2000'],
            ['email' => 'user3@gmail.com', 'password' => 'user3', 'role' => 'user', 'phoneNumber' => '3000']
        ];

        DB::table('users')->insert($users);
    }
}
