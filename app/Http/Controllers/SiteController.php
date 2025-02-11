<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('website.home');
    }
    
    public function contact()
    {
        return view('website.contact');
    }
    
    public function about()
    {
        return view('website.about');
    }

    public function booking()
    {
        return view('website.booking');
    }

    public function bookingCalendar()
    {
        return view('website.booking_calendar');
    }

    public function gallery()
    {
        return view('website.gallery');
    }
}
