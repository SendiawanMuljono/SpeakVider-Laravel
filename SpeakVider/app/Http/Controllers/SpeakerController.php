<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    public function getDetailSpeakerMonday(Request $request){
        $speaker = Speaker::where('id', '=', $request->route('id'))->get();
        $schedule = app('App\Controllers\ScheduleController')->getDayScheduleMonday();
        return view('speakerdetail')->with('speaker', $speaker)->with('schedule', $schedule);
    }

    public function getDetailSpeakerTuesday(Request $request){
        $speaker = Speaker::where('id', '=', $request->route('id'))->get();
        $schedule = app('App\Controllers\ScheduleController')->getDayScheduleTuesday();
        return view('speakerdetail')->with('speaker', $speaker)->with('schedule', $schedule);
    }

    public function getDetailSpeakerWednesday(Request $request){
        $speaker = Speaker::where('id', '=', $request->route('id'))->get();
        $schedule = app('App\Controllers\ScheduleController')->getDayScheduleWednesday();
        return view('speakerdetail')->with('speaker', $speaker)->with('schedule', $schedule);
    }

    public function getDetailSpeakerThursday(Request $request){
        $speaker = Speaker::where('id', '=', $request->route('id'))->get();
        $schedule = app('App\Controllers\ScheduleController')->getDayScheduleThursday();
        return view('speakerdetail')->with('speaker', $speaker)->with('schedule', $schedule);
    }

    public function getDetailSpeakerFriday(Request $request){
        $speaker = Speaker::where('id', '=', $request->route('id'))->get();
        $schedule = app('App\Controllers\ScheduleController')->getDayScheduleFriday();
        return view('speakerdetail')->with('speaker', $speaker)->with('schedule', $schedule);
    }

    public function viewAllSpeakers(){
        $speakers = Speaker::simplePaginate(9);
        return view('allspeakers',[
            'speakers' => $speakers
        ]);
    }
}
