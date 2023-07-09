<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestContrntroller extends Controller
{
    //
    public function index()
    {
        //event
        $events = \App\Models\Event::all();
        return view('frontend.guest.index',compact('events'));
    }
}
