<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gym;
use App\admin;
use App\member;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;


class adminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
       
        $gym=gym::all()->count();
        $member=member::all()->count();
        return view('admin.dashboard',compact('gym','member'));
    }

    public function addg()
    {
        return view('admin.addgym');
    }

    public function addgym(Request $request)
    {
        $request->validate(
            [
                'name'=>'required|max:50|min:5',
                'address'=>'required|max:40|min:5',
                'gymphno'=>'required|max:13|min:10',
                'email'=> 'required|email|unique:gyms',
                'ownername'=>'required|max:50|min:5',
                'username'=>'required|max:20|min:5|unique:gyms',
                'password'=>'required|max:20|min:8',
                'phno'=> 'required|max:13|min:10',
                'status'=>'required',
                'image'=>'sometimes|file|image|mimes:jpeg,png,jpg,svg|max:10000',
            ]);

          
            $request->request->add(['admin_id'=> 1]);

            $password= $request->input('password');                 //password hash
            $newpassword= Hash::make($password);
            $request->request->add(['password'=> $newpassword]);
     
            $data=gym::create($request->all());

            $this->storeImage($data);
            return redirect()->route('admin.dashboard');
    }

    public function storeImage($data){
        if(request()->has('image')){
            $data->update([
                'image'=>request()->image->store('upload','public'),
            ]);

            $image=Image::make(public_path('storage/'.$data->image))->fit(600,600);
            $image->save();
        }
    }

    public function activegym()
    {
        $gyms= gym::activegym()->latest()->paginate(8);
        return view('admin.gymlist',compact('gyms'));
    }

    public function allgym()
    {
        $gyms= gym::all();
        return view('admin.allgym',compact('gyms'));
    }

    public function gymview(gym $gym)               //view button
    {
        if ($gym->status==1) {
            $status="Active";
    }   else {
            $status="Inactive";
    }
    
        return view('admin.gymview',compact('gym','status'));
    }

    public function gedit(gym $gym)                       //gym edit of view
    {   
        return view('admin.gymedit',compact('gym'));
    }

    public function passwordupdate(Request $request,$id)
    {
        $request->validate(
            [
                'password'=>'required|min:8'
            ]);

        $password = $request->input('password');        //hash password
        $newpassword= Hash::make($password);

        $data = gym::find($id);
        $data->password= $newpassword;
        $data->save();
        return redirect()->route('admin.dashboard');
        
    }

    public function gupdate(Request $request, $gym)
    { 
        $request->validate(
            [
                'name'=>'required|max:50|min:5',
                'address'=>'required|max:40|min:5',
                'gymphno'=>'required|max:13|min:10',
                'email'=> 'required|email',
                'ownername'=>'required|max:50|min:5',
                'username'=>'required|max:20|min:5',
                'phno'=> 'required|max:13|min:10',
                'status'=>'required',
                'image'=>'sometimes|file|image|mimes:jpeg,png,jpg,svg|max:10000',
            ]);
      
            $request->request->add(['admin_id'=>1]);
            $a=gym::find($gym);
            $a->update($request->all());
            $this->storeImage($a);

            return redirect()->back();
    }
    public function gymhakai($id)
    {
     
        gym::destroy($id);
        return redirect()->route('admin.dashboard');
    }

    public function allmembers($id)
    {
        $members= gym::find($id)->members;
        return view('admin.allmembers',compact('members'));
    }

    
    
    public function memberview(member $member)               //view button
    {
        if ($member->status==1){$status="Active";}
        else {$status="Inactive";}
        return view('admin.memberview',compact('member','status'));
    }

    public function profile()
    {
        $b=auth::user()->id;
        if($b!=1){echo"FUCK OFF";}
        else{
        $a=admin::find($b);
        return view('admin.profile',compact('a'));
    }}

    public function profileupdate(request $request)
    {
        $a=auth::user()->id;
        if($a!=1){echo"FUCK OFF";}
        else{
            $request->validate(
                [
                    'password'=>'required|min:8'
                ]);
    
            $password = $request->input('password');        //hash password
            $newpassword= Hash::make($password);
    
            $data = admin::find($a);
            $data->password= $newpassword;
            $data->save();
            return redirect()->route('admin.logout');
        }
    }

    public function future()
    {
        return view('admin.future');
    }





  
 



}
