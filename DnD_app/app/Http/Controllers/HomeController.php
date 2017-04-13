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

    public function ccname()
    {
        return view('createcharacter/name');
    }

    public function ccclass()
    {
        return view('createcharacter/selectclass');
    }

    public function ccrace()
    {
        return view('createcharacter/selectrace');
    }

    public function ccbasicinfo()
    {
        return view('createcharacter/basicinfo');
    }

    public function ccdetailedinfo()
    {
        return view('createcharacter/detailedinfo');
    }

    public function ccstats()
    {
        return view('createcharacter/');
    }

    public function ccreview()
    {
        return view('createcharacter/');
    }
//
//    public function cc()
//    {
//        return view('createcharacter/');
//    }
//
//    public function cc()
//    {
//        return view('createcharacter/');
//    }

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
