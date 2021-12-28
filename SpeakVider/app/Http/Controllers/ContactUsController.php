<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function viewContactUs(){
        if(auth()->user()->role == "admin"){
            return redirect()->to('/admin');
        }
        return view('contactus', [
            'title' => 'Contact Us'
        ]);
    }
}
