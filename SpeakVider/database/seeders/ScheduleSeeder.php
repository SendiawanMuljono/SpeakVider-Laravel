<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schedules = [
            // ['speakerID' => , 'day' => '', 'startTime' => '', 'endTime' => '', 'price' => , 'status' => ],
        ];

        DB::table('schedules')->insert($schedules);
    }
}
