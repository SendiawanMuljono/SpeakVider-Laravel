<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'viewHome']);

Route::get('/home', [HomeController::class, 'viewHome']);

Route::get('/allspeakers', [SpeakerController::class, 'viewAllSpeakers']);

Route::get('/aboutus', [AboutUsController::class, 'viewAboutUs']);

Route::get('/contactus', [ContactUsController::class, 'viewContactUs']);

Route::get('/speakerdetail', function () {
    return view('speakerdetail');
});

Route::get('/speakerdetail/{id}/Monday', [SpeakerController::class, 'getDetailSpeakerMonday']);
Route::get('/speakerdetail/{id}/Tuesday', [SpeakerController::class, 'getDetailSpeakerTuesday']);
Route::get('/speakerdetail/{id}/Wednesday', [SpeakerController::class, 'getDetailSpeakerWednesday']);
Route::get('/speakerdetail/{id}/Thursday', [SpeakerController::class, 'getDetailSpeakerThursday']);
Route::get('/speakerdetail/{id}/Friday', [SpeakerController::class, 'getDetailSpeakerFriday']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/admin', [HomeController::class, 'viewHomeAdmin']);
Route::get('/admin/users', [UserController::class, 'viewUsers']);
Route::get('/admin/users/insertuser', [UserController::class, 'viewInsertUser']);
Route::post('/admin/users/insertuser', [UserController::class, 'insertUser']);
Route::get('/admin/users/updateuser/{userID}', [UserController::class, 'viewUpdateUser']);
Route::put('/admin/users/updateuser/{userID}', [UserController::class, 'updateUser']);
Route::delete('/admin/users/deleteuser/{userID}', [UserController::class, 'deleteUser']);
Route::get('/admin/speakers', [SpeakerController::class, 'viewSpeakers']);
Route::get('/admin/speakers/insertspeaker', [SpeakerController::class, 'viewInsertSpeaker']);
Route::post('/admin/speakers/insertspeaker', [SpeakerController::class, 'insertSpeaker']);
Route::get('/admin/speakers/updatespeaker/{speakerID}', [SpeakerController::class, 'viewUpdateSpeaker']);
Route::put('/admin/speakers/updatespeaker/{speakerID}', [SpeakerController::class, 'updateSpeaker']);
Route::delete('/admin/speakers/deletespeaker/{speakerID}', [SpeakerController::class, 'deleteSpeaker']);
Route::get('/admin/schedules', [ScheduleController::class, 'viewSchedules']);
Route::get('/admin/schedules/insertschedule', [ScheduleController::class, 'viewInsertSchedule']);
Route::post('/admin/schedules/insertschedule', [ScheduleController::class, 'insertSchedule']);
Route::get('/admin/schedules/updateschedule/{scheduleID}', [ScheduleController::class, 'viewUpdateSchedule']);
Route::put('/admin/schedules/updateschedule/{scheduleID}', [ScheduleController::class, 'updateSchedule']);
Route::delete('/admin/schedules/deleteschedule/{scheduleID}', [ScheduleController::class, 'deleteSchedule']);
Route::get('/admin/transactions', [TransactionController::class, 'viewTransactions']);
