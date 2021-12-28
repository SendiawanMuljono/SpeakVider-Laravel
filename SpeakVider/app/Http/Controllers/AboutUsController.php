<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function viewAboutUs(){
        if(auth()->user()->role == "admin"){
            return redirect()->to('/admin');
        }
        return view('aboutus', [
            'title' => 'About Us'
        ]);
    }
}
