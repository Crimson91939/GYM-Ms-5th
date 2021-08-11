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

class gymController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:gym');
    }

    public function active_members()
    {
        $id=auth::user()->id;
        $gym=gym::find($id);
        $members=$gym->members()->where('status',1)->paginate(8);
        return view('gym.activemembers',compact('members'));
    }
    
    public function inactive_members()
    {
        $id=auth::user()->id;
        $gym=gym::find($id);
        $members=$gym->members()->where('status',0)->paginate(8);
        return view('gym.activemembers',compact('members'));
    }
    public function dashboard()
    {
        $id=auth::user()->id;
        $gym=gym::find($id);
        $members=$gym->members()->where('status',2)->paginate(8);
        return view('gym.dashboard',compact('members'));
    }

    
    public function memberview($id)
    {
        $member=member::find($id);
        if ($member->status==1){$status="Active";}
        elseif($member->status==0){$status="inactive";}
        else{$status="Requesting";}  
        return view('gym.view_member',compact('member','status'));
    }
    public function memberdelete($id)
    {
        $member=member::find($id);
        $member->delete();
        return redirect()->route('gym.dashboard');
    }

    public function memberpasswordupdate(Request $request, $id)
    {
        $request->validate(
            [
                'password'=>'required'
            ]);

        $password = $request->input('password');        //hash password
        $newpassword= Hash::make($password);

        $data = member::find($id);
        $data->password= $newpassword;
        $data->save();
        return back();  
    }
    public function memberupdatepage($id)
    {
        $member=member::find($id);
        return view('gym.edit_member',compact('member'));
    }
    public function memberupdate(Request $request,$id)
    {
        $data = member::find($id);
      $this->validate($request,[     
                'email' => 'required|email',
                'name' => 'required',
                'phno' =>'required|numeric',
                'gender' =>'required',
                'age' => 'required|numeric|max:80',
                'username' => 'required'
            ]);
  
       
        $data->email = $request->input('email');
        $data->name=$request->input('name');
        $data->phno=$request->input('phno');
        $data->gender=$request->input('gender');
        $data->age=$request->input('age');
        $data->username=$request->input('username');
        $data->status=$request->input('status');
        $data->save();
        return back();
    }

    public function profile()
    {
        $gym=gym::find(Auth::user()->id);
        if ($gym->status==1) {
            $status="Active";
    }   else {
            $status="Inactive";
    }
        return view('gym.profile',compact('gym','status'));
    }

    public function admin()
    {
        $admin=admin::where('id',1)->get();
        return view('gym.admin',compact('admin'));
    }

 
}
