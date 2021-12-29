<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutUsController extends Controller
{
    public function viewAboutUs(){
        if(Auth::check()){
            if(auth()->user()->role == "admin"){
                return redirect()->to('/admin');
            }
        }
        return view('aboutus', [
            'title' => 'About Us'
        ]);
    }
}
