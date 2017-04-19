<?php

namespace App\Http\Controllers;

use App\UserCampaign;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserCampaignsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('usercampaigns.home', compact('usercampaigns'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usercampaigns = UserCampaign::all();

        return view('usercampaigns.index', compact('usercampaigns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usercampaigns.create', compact('usercampaigns'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $usercampaign = new UserCampaign($request->all());

        $usercampaign = new UserCampaign;

        $usercampaign->create($request->all());

        return redirect('usercampaigns');
    }

    public function show($id)
    {
        $usercampaign = UserCampaign::findOrFail($id);

        return view('usercampaigns.show', compact('usercampaign'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usercampaign = UserCampaign::findOrFail($id);

        return view('usercampaigns.update', compact('usercampaign'));
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
//        $usercampaign = UserCampaign::find($id);
//        $usercampaign->name = Request::get('name');
//        $usercampaign->alias = Request::get('alias');
//        $usercampaign->description = Request::get('description');
//        $usercampaign->save();

        $usercampaign = UserCampaign::findOrFail($id);

        $usercampaign->update($request->all());

        return redirect('usercampaigns');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usercampaign = UserCampaign::findOrFail($id);

        $usercampaign->delete();

        return redirect('/usercampaigns/');
    }
}
