<?php

namespace App\Http\Controllers;

use App\Group;

use Illuminate\Http\Request;

use App\Http\Requests;

class GroupsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('groups.home', compact('groups'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::all();

        return view('groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groups.create', compact('groups'));
    }

    public function show($id)
    {
        $group = Group::findOrFail($id);

        return view('groups.show', compact('group'));
    }

    public function edit($id)
    {
        $group = Group::findOrFail($id);

        return view('groups.update', compact('group'));
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
//        $group = Group::find($id);
//        $group->name = Request::get('name');
//        $group->alias = Request::get('alias');
//        $group->description = Request::get('description');
//        $group->save();

        $group = Group::findOrFail($id);

        $group->update($request->all());

        return redirect('groups');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group = Group::findOrFail($id);

        $group->delete();

        return redirect('/groups/');
    }
}
