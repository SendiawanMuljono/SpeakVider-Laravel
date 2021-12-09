<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('layout');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contactus', function () {
    return view('contactus');
});


Route::get('/speakerdetail', function () {
    return view('speakerdetail');
});

Route::get('/speakerdetail/{id}/Monday', [SpeakerController::class, 'getDetailSpeakerMonday']);
Route::get('/speakerdetail/{id}/Tuesday', [SpeakerController::class, 'getDetailSpeakerTuesday']);
Route::get('/speakerdetail/{id}/Wednesday', [SpeakerController::class, 'getDetailSpeakerWednesday']);
Route::get('/speakerdetail/{id}/Thursday', [SpeakerController::class, 'getDetailSpeakerThursday']);
Route::get('/speakerdetail/{id}/Friday', [SpeakerController::class, 'getDetailSpeakerFriday']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
