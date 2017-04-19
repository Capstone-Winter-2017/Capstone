<?php

namespace App\Http\Controllers;

use App\UserGroup;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserGroupsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('usergroups.home', compact('usergroups'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usergroups = UserGroup::all();

        return view('usergroups.index', compact('usergroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usergroups.create', compact('usergroups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $usergroup = new UserGroup($request->all());

        $usergroup = new UserGroup;

        $usergroup->create($request->all());

        return redirect('usergroups');
    }

    public function show($id)
    {
        $usergroup = UserGroup::findOrFail($id);

        return view('usergroups.show', compact('usergroup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usergroup = UserGroup::findOrFail($id);

        return view('usergroups.update', compact('usergroup'));
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
//        $usergroup = UserGroup::find($id);
//        $usergroup->name = Request::get('name');
//        $usergroup->alias = Request::get('alias');
//        $usergroup->description = Request::get('description');
//        $usergroup->save();

        $usergroup = UserGroup::findOrFail($id);

        $usergroup->update($request->all());

        return redirect('usergroups');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usergroup = UserGroup::findOrFail($id);

        $usergroup->delete();

        return redirect('/usergroups/');
    }
}
