<?php

namespace App\Http\Controllers;

use App\UserSession;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserSessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('usersessions.home', compact('usersessions'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersessions = UserSession::all();

        return view('usersessions.index', compact('usersessions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usersessions.create', compact('usersessions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $usersession = new UserSession($request->all());

        $usersession = new UserSession;

        $usersession->create($request->all());

        return redirect('usersessions');
    }

    public function show($id)
    {
        $usersession = UserSession::findOrFail($id);

        return view('usersessions.show', compact('usersession'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usersession = UserSession::findOrFail($id);

        return view('usersessions.update', compact('usersession'));
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
//        $usersession = UserSession::find($id);
//        $usersession->name = Request::get('name');
//        $usersession->alias = Request::get('alias');
//        $usersession->description = Request::get('description');
//        $usersession->save();

        $usersession = UserSession::findOrFail($id);

        $usersession->update($request->all());

        return redirect('usersessions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usersession = UserSession::findOrFail($id);

        $usersession->delete();

        return redirect('/usersessions/');
    }
}
