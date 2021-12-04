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
            ['email' => 'speaker1@speakvider.com', 'password' => 'speaker1', 'phoneNumber' => '0000', 'cv' => 'speaker1cv.jpg', 'photo' => 'speaker1.jpg', 'skill' => 'speaker'],
            ['email' => 'speaker2@speakvider.com', 'password' => 'speaker2', 'phoneNumber' => '0001', 'cv' => 'speaker2cv.jpg', 'photo' => 'speaker2.jpg', 'skill' => 'speaker'],
            ['email' => 'speaker3@speakvider.com', 'password' => 'speaker3', 'phoneNumber' => '0002', 'cv' => 'speaker3cv.jpg', 'photo' => 'speaker3.jpg', 'skill' => 'speaker'],
            ['email' => 'speaker4@speakvider.com', 'password' => 'speaker4', 'phoneNumber' => '0003', 'cv' => 'speaker4cv.jpg', 'photo' => 'speaker4.jpg', 'skill' => 'speaker'],
            ['email' => 'speaker5@speakvider.com', 'password' => 'speaker5', 'phoneNumber' => '0004', 'cv' => 'speaker5cv.jpg', 'photo' => 'speaker5.jpg', 'skill' => 'speaker'],
            ['email' => 'speaker6@speakvider.com', 'password' => 'speaker6', 'phoneNumber' => '0005', 'cv' => 'speaker6cv.jpg', 'photo' => 'speaker6.jpg', 'skill' => 'speaker'],
            ['email' => 'speaker7@speakvider.com', 'password' => 'speaker7', 'phoneNumber' => '0006', 'cv' => 'speaker7cv.jpg', 'photo' => 'speaker7.jpg', 'skill' => 'speaker'],
            ['email' => 'speaker8@speakvider.com', 'password' => 'speaker8', 'phoneNumber' => '0007', 'cv' => 'speaker8cv.jpg', 'photo' => 'speaker8.jpg', 'skill' => 'speaker'],
            ['email' => 'speaker9@speakvider.com', 'password' => 'speaker9', 'phoneNumber' => '0008', 'cv' => 'speaker9cv.jpg', 'photo' => 'speaker9.jpg', 'skill' => 'speaker'],
            ['email' => 'speaker10@speakvider.com', 'password' => 'speaker10', 'phoneNumber' => '0009', 'cv' => 'speaker10cv.jpg', 'photo' => 'speaker10.jpg', 'skill' => 'speaker']
        ];

        DB::table('speakers')->insert($speakers);
    }
}
