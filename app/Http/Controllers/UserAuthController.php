<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;


class UserAuthController extends Controller
{
    function homePage(){
        return view('welcome');
    }

    public function login(){
        return view("client.pages.login");
    }

    public function registration(){
        return view("client.pages.registration");
    }

    // *****User registration*****
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $result = $user->save();
        if($result){
            return back()->with('success', 'Congrats!!! You have registered successfully.');
        }
        else{
            return back()->with('fail', 'Error!!! Something wrong.');
        }
    }
    // *****End User registration*****


    // *****Check user validation for login*****
    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }
            else{
                return back()->with('fail', 'Data not match.');
            }
        }
        else{
            return back()->with('fail', 'Data not match.');
        }
    }
    // *****End Check user validation for login*****


    // *****User dashboard with session id*****
    public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }
    // *****End User dashboard*****

 


    // *****Logout*****
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
    // *****End logout*****
}
