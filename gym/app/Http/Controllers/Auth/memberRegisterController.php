<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\member;
use App\gym;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class memberRegisterController extends Controller
{
   

   
    public function __construct()
    {
        $this->middleware('guest:member');
    }

    public function viewregisterform()
    {
        $gyms=gym::Activegym()->select('name','id')->get();
        return view('auth.memberRegister',compact('gyms'));
    }


    public function register(Request $request)
    {
    
        $request->validate(
            [
                'gym_id'=>'required',
                'email' => 'required|email',
                'password' =>'required',
                'name' => 'required',
                'phno' =>'required|numeric',
                'gender' =>'required',
                'age' => 'required|numeric',
                'username' => 'required'
            ]);

            $status=2;
            $request->request->add(['status'=> $status]);

            $password = $request->input('password');            //hasing password
            $newpassword= Hash::make($password);
            $request->request->add(['password'=> $newpassword]);


           member::create($request->all());
           return redirect()->route('member.login');
      
    }

   
}
