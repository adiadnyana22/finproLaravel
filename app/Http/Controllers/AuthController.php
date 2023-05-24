<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request) {
        $dropdownCategory = Category::all();

        return view('pages.guest.login')->with("dropdown", $dropdownCategory);
    }

    public function loginMethod(Request $request) {
        $validateReq = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $rememberMe = ($request->remember != null);

        if (Auth::attempt($validateReq, $rememberMe)) {
            if($rememberMe){
                Cookie::queue('email_logged', $request->email, 60*2);
                Cookie::queue('password_logged', $request->password, 60*2);
            }

            if(Auth::user()->role == "admin") return redirect()->route('homepage');
            else if(Auth::user()->role == "user") return redirect()->route('homepage');
        }

        return back()->withErrors([
            'email' => "Email and password doesn't match",
        ]);
    }

    public function register() {
        $dropdownCategory = Category::all();
        $country = Country::all();

        return view('pages.guest.register')->with("dropdown", $dropdownCategory)->with("country", $country);
    }

    public function registerMethod(Request $request) {
        $validateReq = $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|alpha_num|min:8',
            'confirm-pass' => 'required|required-with:password|same:password',
            'gender' => 'required|in:male,female',
            'dob' => 'required|date|after:1900-01-01|before:today',
            'country' => 'required'
        ]);

        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->password = Hash::make($request->password);
        $newUser->gender = $request->gender;
        $newUser->dob = $request->dob;
        $newUser->country_id = $request->country;
        $newUser->save();

        return redirect()->route('login');
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('login');
    }
}
