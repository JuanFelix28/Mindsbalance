<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{

    // move page
    public function ContactUsPage(){
        return view('contactus');
    }

    public function detailPage(Request $request){
        $doctor = doctor::find($request->id);
        return view('detail')->with('doctor', $doctor);
    }

    public function HomePage(){
        $doctor = doctor::all();
        return view('home')->with('doctors', $doctor);
    }

    public function loginPage(){
        return view('login');
    }

    public function registerPage(){
        return view('register');
    }

    // authentication
    public function signin(Request $request){
        $userCredential = [
            'email' => $request['email'],
            'password' => $request['password']
        ];

        $remember = $request->has('remember');

        if($remember){
            Cookie::queue('rememberedusername', $request->username, 60*24*7);
            Cookie::queue('rememberedpassword', $request->password, 60*24*7);
        }else{
            Cookie::queue(Cookie::forget('rememberedusername'));
            Cookie::queue(Cookie::forget('rememberedpassword'));
        }

        if (Auth::attempt($userCredential, $remember)) {
            return redirect('/');
        }else{
            if(User::where('email', $request['email'])->exists()){
                $errors = ['Incorrect password'];
                return redirect('/login')->withErrors($errors);
            }else{
                $errors = ['Email is not registered!'];
                return redirect('/login')->withErrors($errors);
            }
        }
    }

    public function signup(Request $request){
        $name = $request->Fullname;
        $email = $request->email;
        $password = $request->password;

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password)
        ]);

        $userCredential = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];

        if (Auth::attempt($userCredential)) {
            return redirect('/');
        }
    }

    public function signout(){
        Auth::logout();
        return redirect('/');
    }


}
