<?php

namespace App\Http\Controllers;

use App\Friend;

use Illuminate\Http\Request;

use App\Http\Requests;

class FriendsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('friends.home', compact('friends'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $friends = Friend::all();

        return view('friends.index', compact('friends'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('friends.create', compact('friends'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $friend = new Friend($request->all());

        $friend = new Friend;

        $friend->create($request->all());

        return redirect('friends');
    }

    public function show($id)
    {
        $friend = Friend::findOrFail($id);

        return view('friends.show', compact('friend'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $friend = Friend::findOrFail($id);

        return view('friends.update', compact('friend'));
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
//        $friend = Friend::find($id);
//        $friend->name = Request::get('name');
//        $friend->alias = Request::get('alias');
//        $friend->description = Request::get('description');
//        $friend->save();

        $friend = Friend::findOrFail($id);

        $friend->update($request->all());

        return redirect('friends');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $friend = Friend::findOrFail($id);

        $friend->delete();

        return redirect('/friends/');
    }
}
