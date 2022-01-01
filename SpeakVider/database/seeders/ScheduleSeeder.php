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
            ['speakerID' => 1, 'day' => 'Monday', 'startTime' => '08:00', 'endTime' => '10:00', 'price' => 1800000, 'status' => 1],
            ['speakerID' => 1, 'day' => 'Monday', 'startTime' => '11:00', 'endTime' => '13:00', 'price' => 1800000, 'status' => 1],
            ['speakerID' => 1, 'day' => 'Monday', 'startTime' => '14:00', 'endTime' => '16:00', 'price' => 1800000, 'status' => 1],
            ['speakerID' => 1, 'day' => 'Tuesday', 'startTime' => '08:00', 'endTime' => '21:00', 'price' => 1800000, 'status' => 1],
            ['speakerID' => 1, 'day' => 'Wednesday', 'startTime' => '08:00', 'endTime' => '19:00', 'price' => 1800000, 'status' => 1],
            ['speakerID' => 1, 'day' => 'Thursday', 'startTime' => '08:00', 'endTime' => '19:00', 'price' => 1800000, 'status' => 1],
            ['speakerID' => 1, 'day' => 'Friday', 'startTime' => '08:00', 'endTime' => '19:00', 'price' => 1800000, 'status' => 1],
            ['speakerID' => 1, 'day' => 'Saturday', 'startTime' => '08:00', 'endTime' => '21:00', 'price' => 2100000, 'status' => 1],

            ['speakerID' => 2, 'day' => 'Monday', 'startTime' => '12:00', 'endTime' => '14:00', 'price' => 1200000, 'status' => 1],
            ['speakerID' => 2, 'day' => 'Monday', 'startTime' => '15:00', 'endTime' => '17:00', 'price' => 1200000, 'status' => 1],
            ['speakerID' => 2, 'day' => 'Tuesday', 'startTime' => '10:00', 'endTime' => '15:00', 'price' => 1400000, 'status' => 1],
            ['speakerID' => 2, 'day' => 'Wednesday', 'startTime' => '08:00', 'endTime' => '19:00', 'price' => 1400000, 'status' => 1],

            ['speakerID' => 3, 'day' => 'Thursday', 'startTime' => '08:00', 'endTime' => '10:00', 'price' => 1000000, 'status' => 1],
            ['speakerID' => 3, 'day' => 'Thursday', 'startTime' => '11:00', 'endTime' => '13:00', 'price' => 1000000, 'status' => 1],
            ['speakerID' => 3, 'day' => 'Thursday', 'startTime' => '15:00', 'endTime' => '17:00', 'price' => 1000000, 'status' => 1],
            ['speakerID' => 3, 'day' => 'Thursday', 'startTime' => '18:00', 'endTime' => '20:00', 'price' => 1000000, 'status' => 1],
            ['speakerID' => 3, 'day' => 'Friday', 'startTime' => '13:00', 'endTime' => '22:00', 'price' => 900000, 'status' => 1],
            ['speakerID' => 3, 'day' => 'Saturday', 'startTime' => '09:00', 'endTime' => '21:00', 'price' => 1500000, 'status' => 1],

            ['speakerID' => 4, 'day' => 'Sunday', 'startTime' => '09:00', 'endTime' => '23:00', 'price' => 2000000, 'status' => 1],

            ['speakerID' => 5, 'day' => 'Saturday', 'startTime' => '08:00', 'endTime' => '21:00', 'price' => 2100000, 'status' => 1],
            ['speakerID' => 5, 'day' => 'Sunday', 'startTime' => '10:00', 'endTime' => '21:00', 'price' => 1800000, 'status' => 1],

            ['speakerID' => 6, 'day' => 'Monday', 'startTime' => '11:00', 'endTime' => '21:00', 'price' => 900000, 'status' => 1],
            ['speakerID' => 6, 'day' => 'Tuesday', 'startTime' => '08:00', 'endTime' => '20:00', 'price' => 1000000, 'status' => 1],
            ['speakerID' => 6, 'day' => 'Wednesday', 'startTime' => '09:00', 'endTime' => '18:00', 'price' => 900000, 'status' => 1],
            ['speakerID' => 6, 'day' => 'Thursday', 'startTime' => '08:00', 'endTime' => '20:00', 'price' => 1200000, 'status' => 1],

            ['speakerID' => 7, 'day' => 'Friday', 'startTime' => '12:00', 'endTime' => '20:00', 'price' => 1300000, 'status' => 1],
            ['speakerID' => 7, 'day' => 'Saturday', 'startTime' => '15:00', 'endTime' => '22:00', 'price' => 1500000, 'status' => 1],
            ['speakerID' => 7, 'day' => 'Sunday', 'startTime' => '09:00', 'endTime' => '23:00', 'price' => 1500000, 'status' => 1],

            ['speakerID' => 8, 'day' => 'Saturday', 'startTime' => '08:00', 'endTime' => '23:00', 'price' => 2200000, 'status' => 1],

            ['speakerID' => 9, 'day' => 'Monday', 'startTime' => '09:00', 'endTime' => '21:00', 'price' => 1250000, 'status' => 1],
            ['speakerID' => 9, 'day' => 'Wednesday', 'startTime' => '10:00', 'endTime' => '19:00', 'price' => 1250000, 'status' => 1],
            ['speakerID' => 9, 'day' => 'Friday', 'startTime' => '09:00', 'endTime' => '21:00', 'price' => 1250000, 'status' => 1],

            ['speakerID' => 10, 'day' => 'Monday', 'startTime' => '10:00', 'endTime' => '22:00', 'price' => 1200000, 'status' => 1],
            ['speakerID' => 10, 'day' => 'Wednesday', 'startTime' => '10:00', 'endTime' => '19:00', 'price' => 1200000, 'status' => 1],
            ['speakerID' => 10, 'day' => 'Friday', 'startTime' => '11:00', 'endTime' => '23:00', 'price' => 2000000, 'status' => 1],
            ['speakerID' => 10, 'day' => 'Saturday', 'startTime' => '11:00', 'endTime' => '23:00', 'price' => 2000000, 'status' => 1],

            ['speakerID' => 11, 'day' => 'Monday', 'startTime' => '08:00', 'endTime' => '21:00', 'price' => 1000000, 'status' => 1],
            ['speakerID' => 11, 'day' => 'Wednesday', 'startTime' => '12:00', 'endTime' => '19:00', 'price' => 1000000, 'status' => 1],
            ['speakerID' => 11, 'day' => 'Friday', 'startTime' => '08:00', 'endTime' => '21:00', 'price' => 1200000, 'status' => 1],

            ['speakerID' => 12, 'day' => 'Saturday', 'startTime' => '14:00', 'endTime' => '21:00', 'price' => 1600000, 'status' => 1],
            ['speakerID' => 12, 'day' => 'Sunday', 'startTime' => '14:00', 'endTime' => '21:00', 'price' => 1600000, 'status' => 1],

            ['speakerID' => 13, 'day' => 'Wednesday', 'startTime' => '12:00', 'endTime' => '19:00', 'price' => 1500000, 'status' => 1],

            ['speakerID' => 14, 'day' => 'Monday', 'startTime' => '15:00', 'endTime' => '21:00', 'price' => 1200000, 'status' => 1],
            ['speakerID' => 14, 'day' => 'Wednesday', 'startTime' => '11:00', 'endTime' => '19:00', 'price' => 1200000, 'status' => 1],
            ['speakerID' => 14, 'day' => 'Friday', 'startTime' => '16:00', 'endTime' => '21:00', 'price' => 1500000, 'status' => 1],

            ['speakerID' => 15, 'day' => 'Wednesday', 'startTime' => '18:00', 'endTime' => '21:00', 'price' => 1000000, 'status' => 1],
            ['speakerID' => 15, 'day' => 'Friday', 'startTime' => '08:00', 'endTime' => '21:00', 'price' => 1400000, 'status' => 1],

            ['speakerID' => 16, 'day' => 'Monday', 'startTime' => '08:00', 'endTime' => '21:00', 'price' => 1200000, 'status' => 1],
            ['speakerID' => 16, 'day' => 'Wednesday', 'startTime' => '08:00', 'endTime' => '19:00', 'price' => 1200000, 'status' => 1],
            ['speakerID' => 16, 'day' => 'Friday', 'startTime' => '12:00', 'endTime' => '21:00', 'price' => 1300000, 'status' => 1],
            ['speakerID' => 16, 'day' => 'Sunday', 'startTime' => '12:00', 'endTime' => '21:00', 'price' => 1300000, 'status' => 1],

            ['speakerID' => 17, 'day' => 'Tuesday', 'startTime' => '08:00', 'endTime' => '19:00', 'price' => 2000000, 'status' => 1],
            ['speakerID' => 17, 'day' => 'Friday', 'startTime' => '08:00', 'endTime' => '21:00', 'price' => 2100000, 'status' => 1],

            ['speakerID' => 18, 'day' => 'Monday', 'startTime' => '10:00', 'endTime' => '21:00', 'price' => 2000000, 'status' => 1],
            ['speakerID' => 18, 'day' => 'Wednesday', 'startTime' => '10:00', 'endTime' => '19:00', 'price' => 2000000, 'status' => 1],
            ['speakerID' => 18, 'day' => 'Friday', 'startTime' => '08:00', 'endTime' => '21:00', 'price' => 2200000, 'status' => 1],
            ['speakerID' => 18, 'day' => 'Saturday', 'startTime' => '08:00', 'endTime' => '21:00', 'price' => 2200000, 'status' => 1],

            ['speakerID' => 19, 'day' => 'Wednesday', 'startTime' => '09:00', 'endTime' => '22:00', 'price' => 1400000, 'status' => 1],
            ['speakerID' => 19, 'day' => 'Thursday', 'startTime' => '09:00', 'endTime' => '22:00', 'price' => 1400000, 'status' => 1],

            ['speakerID' => 20, 'day' => 'Thursday', 'startTime' => '11:00', 'endTime' => '17:00', 'price' => 1200000, 'status' => 1],

            ['speakerID' => 21, 'day' => 'Thursday', 'startTime' => '11:00', 'endTime' => '19:00', 'price' => 1200000, 'status' => 1],
            ['speakerID' => 21, 'day' => 'Sunday', 'startTime' => '10:00', 'endTime' => '19:00', 'price' => 1200000, 'status' => 1],

            ['speakerID' => 22, 'day' => 'Thursday', 'startTime' => '09:00', 'endTime' => '20:00', 'price' => 1600000, 'status' => 1],
            ['speakerID' => 22, 'day' => 'Sunday', 'startTime' => '12:00', 'endTime' => '20:00', 'price' => 1700000, 'status' => 1],

            ['speakerID' => 23, 'day' => 'Thursday', 'startTime' => '13:00', 'endTime' => '22:00', 'price' => 1200000, 'status' => 1],
            ['speakerID' => 23, 'day' => 'Sunday', 'startTime' => '14:00', 'endTime' => '23:00', 'price' => 1500000, 'status' => 1],

            ['speakerID' => 24, 'day' => 'Wednesday', 'startTime' => '12:00', 'endTime' => '19:00', 'price' => 1200000, 'status' => 1],
            ['speakerID' => 24, 'day' => 'Friday', 'startTime' => '11:00', 'endTime' => '21:00', 'price' => 1300000, 'status' => 1],
            ['speakerID' => 24, 'day' => 'Sunday', 'startTime' => '10:00', 'endTime' => '21:00', 'price' => 1500000, 'status' => 1],

            ['speakerID' => 25, 'day' => 'Thursday', 'startTime' => '12:00', 'endTime' => '22:00', 'price' => 1300000, 'status' => 1],
            ['speakerID' => 25, 'day' => 'Sunday', 'startTime' => '13:00', 'endTime' => '17:00', 'price' => 1600000, 'status' => 1],

            ['speakerID' => 26, 'day' => 'Sunday', 'startTime' => '08:00', 'endTime' => '19:00', 'price' => 2000000, 'status' => 1],

            ['speakerID' => 27, 'day' => 'Wednesday', 'startTime' => '08:00', 'endTime' => '19:00', 'price' => 2100000, 'status' => 1],
            ['speakerID' => 27, 'day' => 'Friday', 'startTime' => '08:00', 'endTime' => '21:00', 'price' => 2300000, 'status' => 1],
            ['speakerID' => 27, 'day' => 'Sunday', 'startTime' => '08:00', 'endTime' => '21:00', 'price' => 2300000, 'status' => 1],
        ];

        DB::table('schedules')->insert($schedules);
    }
}
