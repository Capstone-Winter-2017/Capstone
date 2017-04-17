<?php

namespace App\Http\Controllers;

use App\Character;

use Illuminate\Http\Request;

use App\Http\Requests;

class CharactersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view('characters.home', compact('characters'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::all();

        return view('characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('characters.create', compact('characters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $character = new Character($request->all());

        $character = new Character;

        $character->create($request->all());

        return redirect('characters');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $character = Character::findOrFail($id);

        return view('characters.show', compact('character'));
//        return view('characters.' . $page);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $character = Character::findOrFail($id);

        return view('characters.update', compact('character'));
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
//        $character = Character::find($id);
//        $character->name = Request::get('name');
//        $character->alias = Request::get('alias');
//        $character->description = Request::get('description');
//        $character->save();

        $character = Character::find($id);

        $character->update($request->all());

        return redirect('characters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

//    BEGIN CHARACTER CREATION ROUTING INFO
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function name()
    {
//        $character = Character::findOrFail($id);

        return view('characters.name', compact('character'));
    }
}