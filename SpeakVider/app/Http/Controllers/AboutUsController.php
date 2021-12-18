<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function viewAboutUs(){
        return view('aboutus', [
            'title' => 'About Us'
        ]);
    }
}
