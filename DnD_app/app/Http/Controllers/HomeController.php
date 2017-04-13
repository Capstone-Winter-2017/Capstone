<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function myaccount()
    {
        return view('myaccount');
    }

    public function mycharacters()
    {
        return view('mycharacters');
    }

    public function mycampaigns()
    {
        return view('mycampaigns');
    }

    public function mysessions()
    {
        return view('mysessions');
    }

    public function mygroups()
    {
        return view('mygroups');
    }

    public function myfriends()
    {
        return view('myfriends');
    }

    public function mymembers()
    {
        return view('mymembers');
    }

//    public function my()
//    {
//        return view('my');
//    }
//
//    public function my()
//    {
//        return view('my');
//    }
}
