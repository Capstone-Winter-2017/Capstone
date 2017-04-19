<?php
//
//namespace App\Http\Controllers;
//
//use App\UserCharacter;
//
//use Illuminate\Http\Request;
//
//use App\Http\Requests;
//
//class UserCharactersController extends Controller
//{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
//
//    public function home()
//    {
//        return view('usercharacters.home', compact('usercharacters'));
//    }
//
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function index()
//    {
//        $usercharacters = UserCharacter::all();
//
//        return view('usercharacters.index', compact('usercharacters'));
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        return view('usercharacters.create', compact('usercharacters'));
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
////        $usercharacter = new UserCharacter($request->all());
//
//        $usercharacter = new UserCharacter;
//
//        $usercharacter->create($request->all());
//
//        return redirect('usercharacters');
//    }
//
//    public function show($id)
//    {
//        $usercharacter = UserCharacter::findOrFail($id);
//
//        return view('usercharacters.show', compact('usercharacter'));
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//        $usercharacter = UserCharacter::findOrFail($id);
//
//        return view('usercharacters.update', compact('usercharacter'));
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public static function update(Request $request, $id)
//    {
////        $usercharacter = UserCharacter::find($id);
////        $usercharacter->name = Request::get('name');
////        $usercharacter->alias = Request::get('alias');
////        $usercharacter->description = Request::get('description');
////        $usercharacter->save();
//
//        $usercharacter = UserCharacter::findOrFail($id);
//
//        $usercharacter->update($request->all());
//
//        return redirect('usercharacters');
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        $usercharacter = UserCharacter::findOrFail($id);
//
//        $usercharacter->delete();
//
//        return redirect('/usercharacters/');
//    }
//}
