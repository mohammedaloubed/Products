<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Auth;
use Illuminate\Http\Request;

class profileController extends Controller
{
    
    public function index()
    {
        $user= Auth::user();
        $id= Auth::id();
        if ($user->profile == null) {
            $profile= Profile::create([
                  'province'=>'daraa',
                  'user_id'=>$id,
                  'gender'=>'male',
                  'bio'=>'Heloo World',
                  'facebook'=>'http://www.facebook.com'

            ]);
       }

       return view('users.profile')->with('user',$user);
    }

    public function update(Request $request)
    {
        
        $this->validate($request,[
            'name'=>'required',
            'province'=>'required',
            'gender'=>'required',
            'bio'=>'required'
        ]);
        $user = Auth::user();
        $user->name= $request->name;
        $user->profile->province= $request->province;
        $user->profile->gender= $request->gender;
        $user->profile->bio= $request->bio;
        $user->save();
        $user->profile->save();
        /*if ($request->has('password')) {
            $user->password= Hash::make( $request->password);
            $user->save();    
        }*/
        return redirect()->back();

    }

  
}
