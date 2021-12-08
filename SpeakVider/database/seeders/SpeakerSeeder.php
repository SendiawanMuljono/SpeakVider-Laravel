<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpeakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $speakers = [
            ['email' => 'speaker1@speakvider.com', 'password' => 'speaker1', 'phoneNumber' => '0000', 'about' => 'saya speaker1', 'photo' => 'speaker1.jpg', 'skill' => 'speaker'],
            ['email' => 'speaker2@speakvider.com', 'password' => 'speaker2', 'phoneNumber' => '0001', 'about' => 'saya speaker2', 'photo' => 'speaker2.jpg', 'skill' => 'speaker'],
            ['email' => 'speaker3@speakvider.com', 'password' => 'speaker3', 'phoneNumber' => '0002', 'about' => 'saya speaker3', 'photo' => 'speaker3.jpg', 'skill' => 'speaker'],
            ['email' => 'speaker4@speakvider.com', 'password' => 'speaker4', 'phoneNumber' => '0003', 'about' => 'saya speaker4', 'photo' => 'speaker4.jpg', 'skill' => 'speaker'],
            ['email' => 'speaker5@speakvider.com', 'password' => 'speaker5', 'phoneNumber' => '0004', 'about' => 'saya speaker5', 'photo' => 'speaker5.jpg', 'skill' => 'speaker'],
            ['email' => 'speaker6@speakvider.com', 'password' => 'speaker6', 'phoneNumber' => '0005', 'about' => 'saya speaker6', 'photo' => 'speaker6.jpg', 'skill' => 'speaker'],
            ['email' => 'speaker7@speakvider.com', 'password' => 'speaker7', 'phoneNumber' => '0006', 'about' => 'saya speaker7', 'photo' => 'speaker7.jpg', 'skill' => 'speaker'],
            ['email' => 'speaker8@speakvider.com', 'password' => 'speaker8', 'phoneNumber' => '0007', 'about' => 'saya speaker8', 'photo' => 'speaker8.jpg', 'skill' => 'speaker'],
            ['email' => 'speaker9@speakvider.com', 'password' => 'speaker9', 'phoneNumber' => '0008', 'about' => 'saya speaker9', 'photo' => 'speaker9.jpg', 'skill' => 'speaker'],
            ['email' => 'speaker10@speakvider.com', 'password' => 'speaker10', 'phoneNumber' => '0009', 'about' => 'saya speaker10', 'photo' => 'speaker10.jpg', 'skill' => 'speaker']
        ];

        DB::table('speakers')->insert($speakers);
    }
}
