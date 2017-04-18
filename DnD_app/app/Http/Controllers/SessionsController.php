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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Respons
     */
    public function create()
    {
        return view('sessions.create', compact('sessions'));
    }

    public function show($id)
    {
        $session = Session::findOrFail($id);

        return view('sessions.show', compact('session'));
    }

    public function edit($id)
    {
        $session = Session::findOrFail($id);

        return view('sessions.update', compact('session'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function update(Request $request, $id)
    {
//        $session = Session::find($id);
//        $session->name = Request::get('name');
//        $session->alias = Request::get('alias');
//        $session->description = Request::get('description');
//        $session->save();

        $session = Session::findOrFail($id);

        $session->update($request->all());

        return redirect('sessions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $session = Session::findOrFail($id);

        $session->delete();

        return redirect('/sessions/');
    }
}
