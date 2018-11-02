<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Slider;
use Notice;
use About;
use Event;
use Message;
use Achievement;
use ImportantLink;
use EInfo;

class PageController extends Controller
{
    public function index()
    {
        $Sliders = Slider::all();
        $Notices = Notice::all();
        $Messages = Message::all();
        $Events = Event::all();
        $Achievements = Achievement::all();
        $ImportantLinks = ImportantLink::all();
        $EInfos = EInfo::all();
        return view('Page.index')->with(compact(
        	'Sliders',
        	'Notices',
        	'Messages',
        	'Events',
        	'Achievements',
        	'ImportantLinks',
        	'EInfos',
        ));  
    }

 
}
