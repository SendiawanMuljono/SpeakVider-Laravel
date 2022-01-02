<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use RealRashid\SweetAlert\Facades\Alert;

class ScheduleController extends Controller
{
    public function getDayScheduleMonday(Request $request){

        $schedule = Schedule::where('speakerID','=', $request->route('id'))-> where('day', '=', 'Monday')->where('status', '=', 1)->get();
        return $schedule;
    }

    public function getDayScheduleTuesday(Request $request){
        $schedule = Schedule::where('speakerID','=', $request->route('id'))-> where('day', '=', 'Tuesday')->where('status', '=', 1)->get();
        return $schedule;
    }

    public function getDayScheduleWednesday(Request $request){
        $schedule = Schedule::where('speakerID','=', $request->route('id'))-> where('day', '=', 'Wednesday')->where('status', '=', 1)->get();
        return $schedule;
    }

    public function getDayScheduleThursday(Request $request){
        $schedule = Schedule::where('speakerID','=', $request->route('id'))-> where('day', '=', 'Thursday')->where('status', '=', 1)->get();
        return $schedule;
    }

    public function getDayScheduleFriday(Request $request){
        $schedule = Schedule::where('speakerID','=', $request->route('id'))-> where('day', '=', 'Friday')->where('status', '=', 1)->get();
        return $schedule;
    }

    public function getDayScheduleSaturday(Request $request){
        $schedule = Schedule::where('speakerID','=', $request->route('id'))-> where('day', '=', 'Saturday')->where('status', '=', 1)->get();
        return $schedule;
    }

    public function getDayScheduleSunday(Request $request){
        $schedule = Schedule::where('speakerID','=', $request->route('id'))-> where('day', '=', 'Sunday')->where('status', '=', 1)->get();
        return $schedule;
    }

    public function viewSchedules(){
        if(Auth::check()){
            if(auth()->user()->role == "user"){
                return redirect()->to('/home');
            }
        }
        $schedules = Schedule::all();
        return view('listschedules', [
            'title' => 'List Schedules',
            'schedules' => $schedules
        ]);
    }

    public function viewInsertSchedule(){
        if(Auth::check()){
            if(auth()->user()->role == "user"){
                return redirect()->to('/home');
            }
        }
        return view('insertschedule', [
            'title' => 'Insert Schedule'
        ]);
    }

    public function insertSchedule(Request $request){
        if(Auth::check()){
            if(auth()->user()->role == "user"){
                return redirect()->to('/home');
            }
        }
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

    public function viewUpdateSchedule($scheduleID){
        if(Auth::check()){
            if(auth()->user()->role == "user"){
                return redirect()->to('/home');
            }
        }
        $schedule = Schedule::where('id', $scheduleID)->first();
        return view('updateschedule', [
            'title' => 'Update Schedule',
            'schedule' => $schedule
        ]);
    }

    public function updateSchedule($scheduleID, Request $request){
        if(Auth::check()){
            if(auth()->user()->role == "user"){
                return redirect()->to('/home');
            }
        }
        $validated = $request->validate([
            'speakerID' => 'exists:speakers,id',
            'price' => 'gt:299999',
            'status' => 'numeric|min:0|max:1'
        ]);
        $schedule = Schedule::find($scheduleID);
        $schedule->speakerID = $request->speakerID;
        $schedule->day = $request->day;
        $schedule->startTime = $request->startTime;
        $schedule->endTime = $request->endTime;
        $schedule->price = $request->price;
        $schedule->status = $request->status;
        $schedule->save();
        return redirect()->to('/admin/schedules');
    }

    public function deleteSchedule($scheduleID){
        if(Auth::check()){
            if(auth()->user()->role == "user"){
                return redirect()->to('/home');
            }
        }
        $schedule = Schedule::where('id', $scheduleID)->first();
        $schedule->delete();
        return redirect()->back();
    }

    public function updateStatusScheduleByUser($scheduleID){
        if(Auth::check()){
            if(auth()->user()->role == "admin"){
                return redirect()->to('/admin');
            }  
        
            $schedule = Schedule::find($scheduleID);
            $schedule->status = 0;
            $schedule->save();

            //insert schedule to transaction list
            app('App\Http\Controllers\TransactionController')->insertScheduleToTransaction($schedule);

            alert()->success('Schedule Booked', "Go to <a href='/transactions'>Transaction List</a> to process this booking")->toHtml();

            return redirect()->back();
        } else {

            alert()->error("Oops..Access denied", 'Do login first to book the schedule');

            return redirect()->back();
        }
    }

}
