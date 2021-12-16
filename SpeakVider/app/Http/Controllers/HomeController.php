<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewHome(){
        $speakers = Speaker::where('id', '<=', 6)->get();
        return view('home', [
            'speakers' => $speakers
        ]);
    }
}
