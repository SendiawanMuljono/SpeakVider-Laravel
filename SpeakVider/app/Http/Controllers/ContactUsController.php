<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactUsController extends Controller
{
    public function viewContactUs(){
        if(Auth::check()){
            if(auth()->user()->role == "admin"){
                return redirect()->to('/admin');
            }
        }
        return view('contactus', [
            'title' => 'Contact Us'
        ]);
    }
}
