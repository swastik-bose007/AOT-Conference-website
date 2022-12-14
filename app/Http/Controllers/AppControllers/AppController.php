<?php

namespace App\Http\Controllers\AppControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        return view('web.pages.home');
    }
    public function about(){
        return view('web.pages.about');
    }
    public function allEvents(){
        return view('web.pages.allEvents');
    }
    public function singleEvent(){
        return view('web.pages.event');
    }
    public function allSpeakers(){
        return view('web.pages.allSpeakers');
    }
    public function singleSpeaker(){
        return view('web.pages.speaker');
    }
    public function callForPaper(){
        return view('web.pages.callForPaper');
    }
    public function organizer(){
        return view('web.pages.organizer');
    }
    public function allBlogs(){
        return view('web.pages.allBlogs');
    }
    public function singleBlog(){
        return view('web.pages.singleBlog');
    }
    public function contact(){
        return view('web.pages.contact');
    }
    public function accomodation(){
        return view('web.pages.accomodation');
    }
    public function allTickets(){
        return view('web.pages.allTickets');
    }
}
