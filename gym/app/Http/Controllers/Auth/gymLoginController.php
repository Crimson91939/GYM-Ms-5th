<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class gymLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:gym')->except('gymlogout');
    }

    public function showLoginform()
    {
        return view('auth.gymLogin');
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
             if(Auth::guard('gym')->attempt(
                ['email'=>$request->email,
                'password'=>$request->password
                ],
                $request->remember))
                {
                    //redirect to intended location
                    return redirect()->intended(route('gym.dashboard'));
                }
                else
                {
                    //not succesful...send bacck with user data
                    return redirect()->back()->withInput($request->only('email','remember'));
                }    
    }

    public function gymlogout()
    {
        Auth::guard('gym')->logout();
        return redirect('/');
    }
}
