<?php

namespace App\Http\Controllers;

use App\Campaign;

use App\UserCampaign;
use Illuminate\Http\Request;

use App\Http\Requests;

class CampaignsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('campaigns.home', compact('campaigns'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campaigns = Campaign::all();

        return view('campaigns.index', compact('campaigns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('campaigns.create', compact('campaigns'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $campaign = new Campaign($request->all());

        $campaign = new Campaign;

        $campaign->create($request->all());

        return redirect('campaigns');
    }

    public function show($id)
    {
        $campaign = Campaign::findOrFail($id);

        return view('campaigns.show', compact('campaign'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $campaign = Campaign::findOrFail($id);

        return view('campaigns.update', compact('campaign'));
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
//        $campaign = Campaign::find($id);
//        $campaign->name = Request::get('name');
//        $campaign->alias = Request::get('alias');
//        $campaign->description = Request::get('description');
//        $campaign->save();

        $campaign = Campaign::findOrFail($id);

        $campaign->update($request->all());

        return redirect('campaigns');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campaign = Campaign::findOrFail($id);

        $campaign->delete();

        return redirect('/campaigns/');
    }
}
