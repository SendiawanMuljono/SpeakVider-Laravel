<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function getDayScheduleMonday(Request $request){
        $schedule = Schedule::join('speakers', 'speakerID', '=', 'speakers.id')->where('speakerID',
        '=', $request->route('id'))-> where('day', '=', 'Monday')->where('status', '=', 1)->get();
        return $schedule;
    }

    public function getDayScheduleTuesday(Request $request){
        $schedule = Schedule::join('speakers', 'speakerID', '=', 'speakers.id')->where('speakerID',
        '=', $request->route('id'))-> where('day', '=', 'Tuesday')->where('status', '=', 1)->get();
        return $schedule;
    }

    public function getDayScheduleWednesday(Request $request){
        $schedule = Schedule::join('speakers', 'speakerID', '=', 'speakers.id')->where('speakerID',
        '=', $request->route('id'))-> where('day', '=', 'Wednesday')->where('status', '=', 1)->get();
        return $schedule;
    }

    public function getDayScheduleThursday(Request $request){
        $schedule = Schedule::join('speakers', 'speakerID', '=', 'speakers.id')->where('speakerID',
        '=', $request->route('id'))-> where('day', '=', 'Thursday')->where('status', '=', 1)->get();
        return $schedule;
    }

    public function getDayScheduleFriday(Request $request){
        $schedule = Schedule::join('speakers', 'speakerID', '=', 'speakers.id')->where('speakerID',
        '=', $request->route('id'))-> where('day', '=', 'Friday')->where('status', '=', 1)->get();
        return $schedule;
    }

    public function getDayScheduleSaturday(Request $request){
        $schedule = Schedule::join('speakers', 'speakerID', '=', 'speakers.id')->where('speakerID',
        '=', $request->route('id'))-> where('day', '=', 'Saturday')->where('status', '=', 1)->get();
        return $schedule;
    }

    public function getDayScheduleSunday(Request $request){
        $schedule = Schedule::join('speakers', 'speakerID', '=', 'speakers.id')->where('speakerID',
        '=', $request->route('id'))-> where('day', '=', 'Sunday')->where('status', '=', 1)->get();
        return $schedule;
    }
}
