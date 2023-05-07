<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LouisProfileController extends Controller
{
    public function home() {
        return view('home');
    }

    public function resume() {
        return view ('resume');
    }

    public function projects() {
        return view ('projects');
    }

    public function contact() {
        return view ('contact');
    }

    public function contactForm(Request $request) {
        return view ('contact', ['data' => $request]);
    }
    
}
