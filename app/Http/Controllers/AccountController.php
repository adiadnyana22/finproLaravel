<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function profile() {
        $dropdownCategory = Category::all();
        $userData = User::with('country')->where('email', '=', Auth::user()->email)->first();

        return view('pages.user.profile')->with("dropdown", $dropdownCategory)->with("data", $userData);
    }
}
