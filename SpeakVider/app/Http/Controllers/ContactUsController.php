<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function viewContactUs(){
        return view('contactus', [
            'title' => 'Contact Us'
        ]);
    }
}
