<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('website.index');
    }

    public function about_our_school(){
        return view('website.about_our_school');
    }

    public function our_admin_team(){
        return view('website.our_admin_team');
    }

    public function mission_and_purpose(){
        return view('website.mission_and_purpose');
    }

    public function vp_message(){
        return view('website.vp_message');
    }

    public function policy(){
        return view('website.policy');
    }

    public function contact_us(){
        return view('website.contact-us');
    }

    public function news_and_events(){
        return view('website.news_event');
    }

}
