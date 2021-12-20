<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function insertSpeaker(Request $request){
        $validated = $request->validate([
            'email' => 'unique:speakers,email',
            'phoneNumber' => 'min:9',
            'photo' => 'mimes:png,jpg,jpeg'
        ]);

        //Get File
        $file = $request->file('photo');
        //Modify Image Name to Save
        $photoName = $file->getClientOriginalName();

        //Save to Storage
        Storage::putFileAs('public/assets/speakers', $file, $photoName);
        // //Get Image Path to save to DB
        // $imagePath = 'images/'.$imageName;
        // Storage::delete('public/'.$series->image);
        // $series->image = $imagePath;

        $speaker = new Speaker();
        $speaker->name = $request->name;
        $speaker->email = $request->email;
        $speaker->phoneNumber = $request->phoneNumber;
        $speaker->about = $request->about;
        $speaker->photo = $photoName;
        $speaker->skill = $request->skill;
        $speaker->save();
        return redirect()->to('/admin/speakers');
    }

/*
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
