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
            ['name' => 'Rudy Woodward', 'email' => 'speaker1@speakvider.com','phoneNumber' => '0000', 'about' => 'saya speaker1', 'photo' => 'speaker1.jpg', 'skill' => 'speaker'],
            ['name' => 'John-Paul Winters', 'email' => 'speaker2@speakvider.com','phoneNumber' => '0001', 'about' => 'saya speaker2', 'photo' => 'speaker2.jpg', 'skill' => 'speaker'],
            ['name' => 'Emir Brown', 'email' => 'speaker3@speakvider.com','phoneNumber' => '0002', 'about' => 'saya speaker3', 'photo' => 'speaker3.jpg', 'skill' => 'speaker'],
            ['name' => 'Jaime Robbins', 'email' => 'speaker4@speakvider.com','phoneNumber' => '0003', 'about' => 'saya speaker4', 'photo' => 'speaker4.jpg', 'skill' => 'speaker'],
            ['name' => 'Danyl Shaw', 'email' => 'speaker5@speakvider.com','phoneNumber' => '0004', 'about' => 'saya speaker5', 'photo' => 'speaker5.jpg', 'skill' => 'speaker'],
            ['name' => 'Veer Rivas', 'email' => 'speaker6@speakvider.com','phoneNumber' => '0005', 'about' => 'saya speaker6', 'photo' => 'speaker6.jpg', 'skill' => 'speaker'],
            ['name' => 'Fathima Doherty', 'email' => 'speaker7@speakvider.com','phoneNumber' => '0006', 'about' => 'saya speaker7', 'photo' => 'speaker7.jpg', 'skill' => 'speaker'],
            ['name' => 'Emaan Wall', 'email' => 'speaker8@speakvider.com','phoneNumber' => '0007', 'about' => 'saya speaker8', 'photo' => 'speaker8.jpg', 'skill' => 'speaker'],
            ['name' => 'Bertha Rose', 'email' => 'speaker9@speakvider.com','phoneNumber' => '0008', 'about' => 'saya speaker9', 'photo' => 'speaker9.jpg', 'skill' => 'speaker'],
            ['name' => 'Candice Hebert', 'email' => 'speaker10@speakvider.com', 'phoneNumber' => '0009', 'about' => 'saya speaker10', 'photo' => 'speaker10.jpg', 'skill' => 'speaker'],
            ['name' => 'Elisha Hanna', 'email' => 'speaker11@speakvider.com', 'phoneNumber' => '0010', 'about' => 'saya speaker11', 'photo' => 'speaker11.jpg', 'skill' => 'speaker'],
            ['name' => 'Gwion Sheridan', 'email' => 'speaker12@speakvider.com', 'phoneNumber' => '0011', 'about' => 'saya speaker12', 'photo' => 'speaker12.jpg', 'skill' => 'speaker'],
            ['name' => 'Deen Bates', 'email' => 'speaker13@speakvider.com', 'phoneNumber' => '0012', 'about' => 'saya speaker13', 'photo' => 'speaker13.jpg', 'skill' => 'speaker'],
            ['name' => 'Scott Jensen', 'email' => 'speaker14@speakvider.com', 'phoneNumber' => '0013', 'about' => 'saya speaker14', 'photo' => 'speaker14.jpg', 'skill' => 'speaker'],
            ['name' => 'Gail Hackett', 'email' => 'speaker15@speakvider.com', 'phoneNumber' => '0014', 'about' => 'saya speaker15', 'photo' => 'speaker15.jpg', 'skill' => 'speaker'],
            ['name' => 'Daniaal Khan', 'email' => 'speaker16@speakvider.com', 'phoneNumber' => '0015', 'about' => 'saya speaker16', 'photo' => 'speaker16.jpg', 'skill' => 'speaker'],
            ['name' => 'Tayler Valdez', 'email' => 'speaker17@speakvider.com', 'phoneNumber' => '0016', 'about' => 'saya speaker17', 'photo' => 'speaker17.jpg', 'skill' => 'speaker'],
            ['name' => 'Taya Wilkinson', 'email' => 'speaker18@speakvider.com', 'phoneNumber' => '0017', 'about' => 'saya speaker18', 'photo' => 'speaker18.jpg', 'skill' => 'speaker'],
            ['name' => 'Monty Underwood', 'email' => 'speaker19@speakvider.com', 'phoneNumber' => '0018', 'about' => 'saya speaker19', 'photo' => 'speaker19.jpg', 'skill' => 'speaker'],
            ['name' => 'Koa Patel', 'email' => 'speaker20@speakvider.com', 'phoneNumber' => '0019', 'about' => 'saya speaker20', 'photo' => 'speaker20.jpg', 'skill' => 'speaker'],
            ['name' => 'Keisha Schneider', 'email' => 'speaker21@speakvider.com', 'phoneNumber' => '0020', 'about' => 'saya speaker21', 'photo' => 'speaker21.jpg', 'skill' => 'speaker'],
            ['name' => 'Kaiden Aldred', 'email' => 'speaker22@speakvider.com', 'phoneNumber' => '0021', 'about' => 'saya speaker22', 'photo' => 'speaker22.jpg', 'skill' => 'speaker'],
            ['name' => 'Sofie Richardson', 'email' => 'speaker23@speakvider.com', 'phoneNumber' => '0022', 'about' => 'saya speaker23', 'photo' => 'speaker23.jpg', 'skill' => 'speaker'],
            ['name' => 'Teodor Boyd', 'email' => 'speaker24@speakvider.com', 'phoneNumber' => '0023', 'about' => 'saya speaker24', 'photo' => 'speaker24.jpg', 'skill' => 'speaker'],
            ['name' => 'Jemma Bates', 'email' => 'speaker25@speakvider.com', 'phoneNumber' => '0024', 'about' => 'saya speaker25', 'photo' => 'speaker25.jpg', 'skill' => 'speaker'],
            ['name' => 'Cassius Villa', 'email' => 'speaker26@speakvider.com', 'phoneNumber' => '0025', 'about' => 'saya speaker26', 'photo' => 'speaker26.jpg', 'skill' => 'speaker'],
            ['name' => 'Hoorain Bain', 'email' => 'speaker27@speakvider.com', 'phoneNumber' => '0026', 'about' => 'saya speaker27', 'photo' => 'speaker27.jpg', 'skill' => 'speaker']
        ];

        DB::table('speakers')->insert($speakers);
    }
}
