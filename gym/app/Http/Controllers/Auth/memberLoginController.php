<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class memberLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:member')->except('memberlogout');
    }

    public function showLoginform()
    {
        return view('auth.memberLogin');
    }

    
    public function login(Request $request)
    {
        
         //validate the form data
         $this->validate($request,
         [
             'email' => 'required|email',
          'password' => 'required|min:8',
          ]);

        

             //attempt to log user in
             if(Auth::guard('member')->attempt(
                ['email'=>$request->email,
                'password'=>$request->password
                ],
                $request->remember))
                {
                    //redirect to intended location
                    return redirect()->intended(route('member.dashboard'));
                }
                else
                {
                    //not succesful...send bacck with user data
                    return redirect()->back()->withInput($request->only('email','remember'));
                }    
    }

    public function memberlogout()
    {
        Auth::guard('member')->logout();
        
        return redirect('/');
    }

}
