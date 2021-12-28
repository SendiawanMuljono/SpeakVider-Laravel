<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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

    public function viewSpeakerDetail($speakerID){
        $speaker = Speaker::find($speakerID);
        $schedule = Schedule::where('speakerID',$speakerID)->get();
        return view('speakerdetail',[
            'speaker' => $speaker,
            'schedule' => $schedule,
        ]);
    }

    public function viewSpeakers(){
        if(auth()->user()->role == "user"){
            return redirect()->to('/home');
        }
        $speakers = Speaker::all();
        return view('listspeakers', [
            'title' => 'List Speakers',
            'speakers' => $speakers
        ]);
    }

    public function viewInsertSpeaker(){
        if(auth()->user()->role == "user"){
            return redirect()->to('/home');
        }
        return view('insertspeaker', [
            'title' => 'Insert Speaker'
        ]);
    }

    public function insertSpeaker(Request $request){
        if(auth()->user()->role == "user"){
            return redirect()->to('/home');
        }
        $validated = $request->validate([
            'email' => 'unique:speakers,email',
            'phoneNumber' => 'min:9',
            'photo' => 'image|mimes:png,jpg,jpeg'
        ]);

        $file = $request->file('photo');
        $photoName = time().' '.$file->getClientOriginalName();
        $request->photo->move(public_path('/assets/speakers'), $photoName);

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

    public function viewUpdateSpeaker($speakerID){
        if(auth()->user()->role == "user"){
            return redirect()->to('/home');
        }
        $speaker = Speaker::where('id', $speakerID)->first();
        return view('updatespeaker', [
            'title' => 'Update Speaker',
            'speaker' => $speaker
        ]);
    }

    public function updateSpeaker($speakerID, Request $request){
        if(auth()->user()->role == "user"){
            return redirect()->to('/home');
        }
        $validated = $request->validate([
            'email' => 'unique:speakers,email,'.$speakerID,
            'phoneNumber' => 'min:9',
            'photo' => 'image|mimes:png,jpg,jpeg'
        ]);

        $speaker = Speaker::find($speakerID);
        $speaker->name = $request->name;
        $speaker->email = $request->email;
        $speaker->phoneNumber = $request->phoneNumber;
        $speaker->about = $request->about;
        $file = $request->file('photo');
        if($file != null){
            $photoName = time().' '.$file->getClientOriginalName();
            if(File::exists(public_path('assets/speakers/'.$speaker->photo))){
                File::delete(public_path('assets/speakers/'.$speaker->photo));
            }
            $request->photo->move(public_path('/assets/speakers'), $photoName);
            $speaker->photo = $photoName;
        }
        $speaker->skill = $request->skill;
        $speaker->save();
        return redirect()->to('/admin/speakers');
    }

    public function deleteSpeaker($speakerID){
        if(auth()->user()->role == "user"){
            return redirect()->to('/home');
        }
        $speaker = Speaker::where('id', $speakerID)->first();
        if(File::exists(public_path('assets/speakers/'.$speaker->photo))){
            File::delete(public_path('assets/speakers/'.$speaker->photo));
        }
        $speaker->delete();
        return redirect()->back();
    }
}
