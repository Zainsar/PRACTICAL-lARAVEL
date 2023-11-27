<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customcontroller extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function menu()
    {
        return view('menu');
    }
    public function service()
    {
        return view('service');
    }
    public function testimonial()
    {
        return view('testimonial');
    }
    public function team()
    {
        return view('team');
    }
    public function booking()
    {
        return view('booking');
    }
}
