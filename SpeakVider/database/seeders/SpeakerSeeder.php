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
            ['email' => 'speaker3@speakvider.com', 'password' => 'speaker3', 'phoneNumber' => '0002', 'cv' => 'speaker3cv.jpg', 'photo' => 'speaker3.jpg', 'skill' => 'speaker']
        ];

        DB::table('speakers')->insert($speakers);
    }
}
