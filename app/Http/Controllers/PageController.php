<?php

namespace App\Http\Controllers;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Slider;
use App\Notice;
use App\About;
use App\Event;
use App\Message;
use App\Achievement;
use App\Member;
use App\MemberType;
use App\Link;
use App\Website;

class PageController extends Controller
{
    public function index()
    {
        $Website = Website::get()->first();
        $socials = Link::get()->where('type','3');
        $ImpLinks = Link::get()->where('type','1');
        $E_infos = Link::get()->where('type','2');
        $Sliders = Slider::get();
        $About = About::find('1');
        $Notices = Notice::orderBy('created_at', 'desc')->limit('5')->get();
        $Messages = Message::orderBy('created_at', 'desc')->get();
        $Events = Event::orderBy('created_at', 'desc')->limit('3')->get();
        $Achievements = Achievement::orderBy('created_at', 'desc')->limit('2')->get();
        return view('Page.index')->with(compact(
            'Website',
            'socials',
            'ImpLinks',
            'E_infos',
        	'Sliders',
        	'About',
        	'Notices',
        	'Messages',
        	'Events',
        	'Achievements'
        ));  
    }

    public function about()
    {
        $About = About::find('1');
        $History = About::find('2');
        $Mission = About::find('3');
        $Notices = Notice::orderBy('created_at', 'desc')->limit('5')->get();
        $Website = Website::get()->first();
        $socials = Link::get()->where('type','3');
        $ImpLinks = Link::get()->where('type','1');
        return view('Page.about')->with(compact(
            'About',
            'History', 
            'Mission', 
            'Notices',
            'Website',
            'socials',
            'ImpLinks'
        ));  
    }

    public function GovtBody()
    {
        $Members = Member::get()->where('type','1');
        $Type = MemberType::find('1');
        $Notices = Notice::orderBy('created_at', 'desc')->limit('5')->get();
        $Website = Website::get()->first();
        $socials = Link::get()->where('type','3');
        $ImpLinks = Link::get()->where('type','1');
        return view('Page.members')->with(compact(
            'Members',
            'Type', 
            'Notices',
            'Website',
            'socials',
            'ImpLinks'
        ));  
    }

    public function teachers()
    {
        $Members = Member::get()->where('type','2');
        $Type = MemberType::find('2');
        $Notices = Notice::orderBy('created_at', 'desc')->limit('5')->get();
        $Website = Website::get()->first();
        $socials = Link::get()->where('type','3');
        $ImpLinks = Link::get()->where('type','1');
        return view('Page.members')->with(compact(
            'Members',
            'Type', 
            'Notices',
            'Website',
            'socials',
            'ImpLinks'
        ));  
    }

    public function staffs()
    {
        $Members = Member::get()->where('type','3');
        $Type = MemberType::find('3');
        $Notices = Notice::orderBy('created_at', 'desc')->limit('5')->get();
        $Website = Website::get()->first();
        $socials = Link::get()->where('type','3');
        $ImpLinks = Link::get()->where('type','1');
        return view('Page.members')->with(compact(
            'Members',
            'Type', 
            'Notices',
            'Website',
            'socials',
            'ImpLinks'
        ));   
    }
 
}
