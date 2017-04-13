<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
        $home = 'This is the home page.';

        return view('welcome', compact('home'));
    }
}
