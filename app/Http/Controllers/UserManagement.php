<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;

class UserManagement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $all_data =user::all();
        return view('layouts.user.index',compact('all_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this -> validate($request,[

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'role' => 'required',
            'password' => 'required',
            'conf_password' =>'required'
        ]);


        if($request->password == $request->conf_password )
        {
            $user= user::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' =>$request->phone,
                'user_role'=>$request->role,
                'password' =>bcrypt($request->password)
            ]);

            return redirect()->route('user.index') ->with('success','User Create successfully');
        }


        else{
            return redirect()->route('user.create') ->with('warning','Password Not Matched');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_del= user::find($id);
        $user_del ->delete();

          return redirect()->back()->with('delete','Data Deleted Successfully');
    }
}
