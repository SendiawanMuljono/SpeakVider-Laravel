<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function getDayScheduleMonday(Request $request){
        $schedule = Schedule::join('speaker', 'speakerID', '=', 'speaker.id')->where('speakerID',
        '=', $request->route('id'))-> where('day', '=', 'Monday');
        return $schedule;
    }

    public function getDayScheduleTuesday(Request $request){
        $schedule = Schedule::join('speaker', 'speakerID', '=', 'speaker.id')->where('speakerID',
        '=', $request->route('id'))-> where('day', '=', 'Tuesday');
        return $schedule;
    }

    public function getDayScheduleWednesday(Request $request){
        $schedule = Schedule::join('speaker', 'speakerID', '=', 'speaker.id')->where('speakerID',
        '=', $request->route('id'))-> where('day', '=', 'Wednesday');
        return $schedule;
    }

    public function getDayScheduleThursday(Request $request){
        $schedule = Schedule::join('speaker', 'speakerID', '=', 'speaker.id')->where('speakerID',
        '=', $request->route('id'))-> where('day', '=', 'Thursday');
        return $schedule;
    }

    public function getDayScheduleFriday(Request $request){
        $schedule = Schedule::join('speaker', 'speakerID', '=', 'speaker.id')->where('speakerID',
        '=', $request->route('id'))-> where('day', '=', 'Friday');
        return $schedule;
    }
}
