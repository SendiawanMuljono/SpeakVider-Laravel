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
            ['name' => 'Rudy Woodward', 'email' => 'rudwood@gmail.com','phoneNumber' => '08116662111', 'about' => 'saya speaker1', 'photo' => 'speaker1.jpg', 'skill' => 'Clarity, Hosting, Communicative, Brainstorming'],
            ['name' => 'John-Paul Winters', 'email' => 'johnpaul@gmail.com','phoneNumber' => '08789834906', 'about' => 'saya speaker2', 'photo' => 'speaker2.jpg', 'skill' => 'Assertiveness, Articulating'],
            ['name' => 'Emir Brown', 'email' => 'emirb@gmail.com','phoneNumber' => '08116055162', 'about' => 'saya speaker3', 'photo' => 'speaker3.jpg', 'skill' => 'Communicative, Hosting'],
            ['name' => 'Jaime Robbins', 'email' => 'jamierb@yahoo.com','phoneNumber' => '08780341715', 'about' => 'saya speaker4', 'photo' => 'speaker4.jpg', 'skill' => 'Hosting, Articulating'],
            ['name' => 'Danyl Shaw', 'email' => 'danshaw@yahoo.com','phoneNumber' => '08781814966', 'about' => 'saya speaker5', 'photo' => 'speaker5.jpg', 'skill' => 'Assertiveness, Communicative'],
            ['name' => 'Veer Rivas', 'email' => 'veer@hotmail.com','phoneNumber' => '08118722326', 'about' => 'saya speaker6', 'photo' => 'speaker6.jpg', 'skill' => 'Speaking, Hosting'],
            ['name' => 'Fathima Doherty', 'email' => 'farhimadoh@hotmail.com','phoneNumber' => '08785675334', 'about' => 'saya speaker7', 'photo' => 'speaker7.jpg', 'skill' => 'Articulating, Hosting'],
            ['name' => 'Emaan Wall', 'email' => 'emaanw@gmail.com','phoneNumber' => '08211103365', 'about' => 'saya speaker8', 'photo' => 'speaker8.jpg', 'skill' => 'Clarity, Communicative'],
            ['name' => 'Bertha Rose', 'email' => 'barth@hotmail.com','phoneNumber' => '08219859601', 'about' => 'saya speaker9', 'photo' => 'speaker9.jpg', 'skill' => 'Brainstorming, Assertiveness'],
            ['name' => 'Candice Hebert', 'email' => 'candi@gmail.com', 'phoneNumber' => '08113807677', 'about' => 'saya speaker10', 'photo' => 'speaker10.jpg', 'skill' => 'Socializable, Communicative'],
            ['name' => 'Elisha Hanna', 'email' => 'elhha@gmail.com', 'phoneNumber' => '08212616817', 'about' => 'saya speaker11', 'photo' => 'speaker11.jpg', 'skill' => 'Assertiveness, Communicative'],
            ['name' => 'Gwion Sheridan', 'email' => 'gwisher@gmail.com', 'phoneNumber' => '08115260676', 'about' => 'saya speaker12', 'photo' => 'speaker12.jpg', 'skill' => 'Clarity, Communicative'],
            ['name' => 'Deen Bates', 'email' => 'debates@yahoo.com', 'phoneNumber' => '08781530495', 'about' => 'saya speaker13', 'photo' => 'speaker13.jpg', 'skill' => 'Speaking, Hosting'],
            ['name' => 'Scott Jensen', 'email' => 'scotjen@gmail.com', 'phoneNumber' => '08118051726', 'about' => 'saya speaker14', 'photo' => 'speaker14.jpg', 'skill' => 'Assertiveness, Communicative'],
            ['name' => 'Gail Hackett', 'email' => 'gail@gmail.com', 'phoneNumber' => '08786330271', 'about' => 'saya speaker15', 'photo' => 'speaker15.jpg', 'skill' => 'Clarity, Communicative'],
            ['name' => 'Daniaal Khan', 'email' => 'danikha@gmail.com', 'phoneNumber' => '08110852070', 'about' => 'saya speaker16', 'photo' => 'speaker16.jpg', 'skill' => 'Hosting, Articulating'],
            ['name' => 'Tayler Valdez', 'email' => 'tayval@gmail.com', 'phoneNumber' => '08211131182', 'about' => 'saya speaker17', 'photo' => 'speaker17.jpg', 'skill' => 'Speaking, Hosting'],
            ['name' => 'Taya Wilkinson', 'email' => 'tawik@gmail.com', 'phoneNumber' => '08119208464', 'about' => 'saya speaker18', 'photo' => 'speaker18.jpg', 'skill' => 'Clarity, Communicative'],
            ['name' => 'Monty Underwood', 'email' => 'monty@gmail.com', 'phoneNumber' => '08219088001', 'about' => 'saya speaker19', 'photo' => 'speaker19.jpg', 'skill' => 'Communicative, Hosting'],
            ['name' => 'Koa Patel', 'email' => 'patel@gmail.com', 'phoneNumber' => '08113004025', 'about' => 'saya speaker20', 'photo' => 'speaker20.jpg', 'skill' => 'Socializable, Communicative'],
            ['name' => 'Keisha Schneider', 'email' => 'schneiderkei@yahoo.com', 'phoneNumber' => '08783644646', 'about' => 'saya speaker21', 'photo' => 'speaker21.jpg', 'skill' => 'Hosting, Communicative'],
            ['name' => 'Kaiden Aldred', 'email' => 'nedaik@gmail.com', 'phoneNumber' => '08119926542', 'about' => 'saya speaker22', 'photo' => 'speaker22.jpg', 'skill' => 'Hosting, Articulating'],
            ['name' => 'Sofie Richardson', 'email' => 'sofrich@yahoo.com', 'phoneNumber' => '08218723086', 'about' => 'saya speaker23', 'photo' => 'speaker23.jpg', 'skill' => 'Hosting, Communicative'],
            ['name' => 'Teodor Boyd', 'email' => 'teobod@gmail.com', 'phoneNumber' => '08783132226', 'about' => 'saya speaker24', 'photo' => 'speaker24.jpg', 'skill' => 'Communicative, Hosting'],
            ['name' => 'Jemma Bates', 'email' => 'batedjem@yahoo.com', 'phoneNumber' => '08119255683', 'about' => 'saya speaker25', 'photo' => 'speaker25.jpg', 'skill' => 'Speaking, Hosting'],
            ['name' => 'Cassius Villa', 'email' => 'casvil@yahoo.com', 'phoneNumber' => '08215919605', 'about' => 'saya speaker26', 'photo' => 'speaker26.jpg', 'skill' => 'Hosting, Articulating'],
            ['name' => 'Hoorain Bain', 'email' => 'hooray@gmail.com', 'phoneNumber' => '08114407142', 'about' => 'saya speaker27', 'photo' => 'speaker27.jpg', 'skill' => 'Socializable, Communicative']
        ];

        DB::table('speakers')->insert($speakers);
    }
}
