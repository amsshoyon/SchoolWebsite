<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Slider;
use App\Notice;
use App\About;
use App\Event;
use App\Message;
use App\Achievement;
use App\EInfo;
use App\Member;
use App\MemberType;
use App\ImportantLink;

class PageController extends Controller
{
    public function index()
    {
        $Sliders = Slider::get();
        $About = About::find('1');
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
            'About'
        ));  
    }

    public function about()
    {
        $About = About::find('1');
        $History = About::find('2');
        $Mission = About::find('3');
        $Notices = Notice::all();
        $ImportantLinks = ImportantLink::all();
        return view('Page.about')->with(compact('About','History', 'Mission', 'ImportantLinks','Notices'));  
    }

    public function GovtBody()
    {
        $Members = Member::get()->where('type','1');
        $Type = MemberType::find('1');
        $ImportantLinks = ImportantLink::all();
        $Notices = Notice::all();
        return view('Page.members')->with(compact('Members','Type', 'ImportantLinks','Notices'));  
    }

    public function teachers()
    {
        $Members = Member::get()->where('type','2');
        $Type = MemberType::find('2');
        $ImportantLinks = ImportantLink::all();
        $Notices = Notice::all();
        return view('Page.members')->with(compact('Members','Type', 'ImportantLinks','Notices'));  
    }

    public function staffs()
    {
        $Members = Member::get()->where('type','3');
        $Type = MemberType::find('3');
        $ImportantLinks = ImportantLink::all();
        $Notices = Notice::all();
        return view('Page.members')->with(compact('Members','Type', 'ImportantLinks','Notices'));  
    }
 
}
