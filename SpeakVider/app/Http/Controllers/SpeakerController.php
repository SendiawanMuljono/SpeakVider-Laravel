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

    public function viewAllSpeakers(){
        $speakers = Speaker::simplePaginate(9);
        return view('allspeakers',[
            'title' => 'All Speakers',
            'speakers' => $speakers
        ]);
    }

    public function viewSpeakers(){
        $speakers = Speaker::all();
        return view('listspeakers', [
            'title' => 'List Speakers',
            'speakers' => $speakers
        ]);
    }

    public function viewInsertSpeaker(){
        return view('insertspeaker', [
            'title' => 'Insert Speaker'
        ]);
    }

/*
    public function insertUser(Request $request){
        $validated = $request->validate([
            'email' => 'unique:users,email',
            'password' => 'min:8',
            'phoneNumber' => 'min:9'
        ]);
        $user = new User();
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->phoneNumber = $request->phoneNumber;
        $user->save();
        return redirect()->to('/admin/users');
    }

    public function viewUpdateUser($userID){
        $user = User::where('id', $userID)->first();
        return view('updateuser', [
            'title' => 'Update User',
            'user' => $user
        ]);
    }

    public function updateUser($userID, Request $request){
        $validated = $request->validate([
            'email' => 'unique:users,email,'.$userID,
            'password' => 'min:8',
            'phoneNumber' => 'min:9'
        ]);
        $user = User::find($userID);
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->phoneNumber = $request->phoneNumber;
        $user->save();
        return redirect()->to('/admin/users');
    }

    public function deleteUser($userID){
        $user = User::where('id', $userID)->first();
        $user->delete();
        return redirect()->back();
    }
*/
}
