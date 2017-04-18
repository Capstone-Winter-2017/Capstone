<?php

namespace App\Http\Controllers;

use App\Session;

use Illuminate\Http\Request;

use App\Http\Requests;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('sessions.home', compact('sessions'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessions = Session::all();

        return view('sessions.index', compact('sessions'));
    }

    public function show($id)
    {
        $session = Session::findOrFail($id);

        return view('sessions.show', compact('session'));
    }
}
