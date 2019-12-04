<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homeAction() {
        return view('home');
    }

    public function contactAction() {
        return view('contact');
    }

    public function aboutAction() {
        return view('about');
    }
}
