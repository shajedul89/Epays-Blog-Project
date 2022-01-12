<?php

namespace App\Http\Controllers;

use App\Models\settings;
use Illuminate\Http\Request;

class SettingsManagement extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function settingsView(){

        $st= settings::find(1);
        return view('layouts.settings.contact',[
            'sitt' =>$st,
        ]);
    }

    public function settingsViewUpdate(Request $request){
      $edit_data=settings::find(1);
      $edit_data ->address = $request ->address;
      $edit_data ->email = $request ->email;
      $edit_data ->Contact = $request ->contact;
      $edit_data ->Maps =$request->map;

      $social=[
        'facebook' => $request->fb,
        'linkedin' => $request->ln,
        'twitter' => $request->tw,
        'youtube' =>$request->yu,
    ];

    $edit_data-> social= json_encode($social);




      $edit_data ->update();
      return redirect()->back() ->with('success','data updated successfully');
    }
}
