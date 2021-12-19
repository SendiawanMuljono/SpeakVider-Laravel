<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Http\Request;

class SpeakerController extends Controller 
{
    public function getDetailSpeakerMonday(Request $request){
        $speaker = Speaker::where('id', '=', $request->route('id'))->first();
        $schedule = app('App\Http\Controllers\ScheduleController')->getDayScheduleMonday($request);
        return view('speakerdetail')->with('speaker', $speaker)->with('schedule', $schedule);
    }

    public function getDetailSpeakerTuesday(Request $request){
        $speaker = Speaker::where('id', '=', $request->route('id'))->first();
        $schedule = app('App\Http\Controllers\ScheduleController')->getDayScheduleTuesday($request);
        return view('speakerdetail')->with('speaker', $speaker)->with('schedule', $schedule);
    }

    public function getDetailSpeakerWednesday(Request $request){
        $speaker = Speaker::where('id', '=', $request->route('id'))->first();
        $schedule = app('App\Http\Controllers\ScheduleController')->getDayScheduleWednesday($request);
        return view('speakerdetail')->with('speaker', $speaker)->with('schedule', $schedule);
    }

    public function getDetailSpeakerThursday(Request $request){
        $speaker = Speaker::where('id', '=', $request->route('id'))->first();
        $schedule = app('App\Http\Controllers\ScheduleController')->getDayScheduleThursday($request);
        return view('speakerdetail')->with('speaker', $speaker)->with('schedule', $schedule);
    }

    public function getDetailSpeakerFriday(Request $request){
        $speaker = Speaker::where('id', '=', $request->route('id'))->first();
        $schedule = app('App\Http\Controllers\ScheduleController')->getDayScheduleFriday($request);
        return view('speakerdetail')->with('speaker', $speaker)->with('schedule', $schedule);
    }

    public function getDetailSpeakerSaturday(Request $request){
        $speaker = Speaker::where('id', '=', $request->route('id'))->first();
        $schedule = app('App\Http\Controllers\ScheduleController')->getDayScheduleSaturday($request);
        return view('speakerdetail')->with('speaker', $speaker)->with('schedule', $schedule);
    }

    public function getDetailSpeakerSunday(Request $request){
        $speaker = Speaker::where('id', '=', $request->route('id'))->first();
        $schedule = app('App\Http\Controllers\ScheduleController')->getDayScheduleSunday($request);
        return view('speakerdetail')->with('speaker', $speaker)->with('schedule', $schedule);
    }

    public function viewAllSpeakers(){
        $speakers = Speaker::simplePaginate(9);
        return view('allspeakers',[
            'title' => 'All Speakers',
            'speakers' => $speakers
        ]);
    }
}
