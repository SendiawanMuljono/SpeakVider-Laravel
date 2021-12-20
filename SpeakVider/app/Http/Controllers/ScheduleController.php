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

    public function viewSchedules(){
        $schedules = Schedule::all();
        return view('listschedules', [
            'title' => 'List Schedules',
            'schedules' => $schedules
        ]);
    }

    public function viewInsertSchedule(){
        return view('insertschedule', [
            'title' => 'Insert Schedule'
        ]);
    }

    public function insertSchedule(Request $request){
        $validated = $request->validate([
            'speakerID' => 'exists:speakers,id',
            'price' => 'gt:299999'
        ]);
        $schedule = new Schedule();
        $schedule->speakerID = $request->speakerID;
        $schedule->day = $request->day;
        $schedule->startTime = $request->startTime;
        $schedule->endTime = $request->endTime;
        $schedule->price = $request->price;
        $schedule->status = 1;
        $schedule->save();
        return redirect()->to('/admin/schedules');
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
*/
    public function deleteSchedule($scheduleID){
        $schedule = Schedule::where('id', $scheduleID)->first();
        $schedule->delete();
        return redirect()->back();
    }
}
