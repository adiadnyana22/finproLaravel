<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $categoryWithProduct = Category::with('products')->get();
        $dropdownCategory = Category::all();

        return view('pages.guest.home')->with("data", $categoryWithProduct)->with("dropdown", $dropdownCategory);
    }
}
