<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;


class adminLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin')->except('adminlogout');;
    }

    public function showloginform()
    {
        return view('auth.adminlogin');
    }

    public function login(Request $request)
    {
        
        //validate the form data
        $this->validate($request, ['username' => 'required','password' => 'required|min:8']);

             //attempt to log user in
        if(Auth::guard('admin')->attempt(
            ['username'=> $request->username,
            'password'=> $request->password],
            $request->remember))
            {
                //redirect to intended location
              return redirect()->intended(route('admin.dashboard'));
            }
            else
            {
                //not succesful...send bacck with user data
                return redirect()->back()->withInput($request->only('username','remember'));
            }    
        
    }
    public function adminlogout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
