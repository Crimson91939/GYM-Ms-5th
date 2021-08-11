<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\member;
use App\gym;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class memberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:member');
    }

    public function dashboard()
    {
        $member=member::find(auth::user()->id);
        return view('member.dashboard',compact('member'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function view()  ///////////////////////////////////////////////////////////////////////////////
    {
     
            $member = Auth::user();
            $a=Auth::user()->status;
            if ($a==1) {
                $status="Active";
            }
            else{$status="Inactive";}

            return view('member.view',compact('member','status'));
        
    
    }
    public function gymview()
    {
     
            $id=Auth::user()->gym_id;
            $gym= gym::find($id);
            $gym->password="lol we aint giving the password";
            return view('member.mygym',compact('gym'));
        
    
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {        
        if (Auth::check())
        {
            $member=Auth::user();
            return view('member.edit',compact('member'));    
        }
        else{ echo"not authorozized"; } 
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)///////////////////////////////////////
    {
        $id=Auth::user()->id;
        $data = member::find($id);
      $this->validate($request,[     
                'email' => 'required|email',
                'name' => 'required',
                'phno' =>'required|numeric',
                'gender' =>'required',
                'age' => 'required|numeric|max:100',
                'username' => 'required',
                'image'=>'sometimes|image|file|max:12000',
            ]);
          
       
        $data->email = $request->input('email');
        $data->name=$request->input('name');
        $data->phno=$request->input('phno');
        $data->gender=$request->input('gender');
        $data->age=$request->input('age');
        $data->username=$request->input('username');
        $data->save();
        $this->storeImage($data);
        return redirect()->route('member.view');
    }
    public function storeImage($data)
    {
        if(request()->has('image')){
            $data->update([
                'image'=>request()->image->store('upload','public'),
            ]);

            $image=Image::make(public_path('storage/'.$data->image))->fit(600,600);
            $image->save();
        }
    }


    public function passwordupdate(Request $request)
    {
        $request->validate(
            [
                'password'=>'required'
            ]);

        $password = $request->input('password');        //hash password
        $newpassword= Hash::make($password);

        $id=Auth::user()->id;
        $data = member::find($id);
        $data->password= $newpassword;
        $data->save();
        return redirect()->route('member.view');
        
    }

    public function cardio()
    {
        return view('member.cardio');
    }
    public function weight()
    {
        return view('member.weight');
    }


}
