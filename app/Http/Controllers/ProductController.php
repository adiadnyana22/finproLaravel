<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function search(Request $request) {
        $dropdownCategory = Category::all();
        $products = Product::with('category')->get();
        if($request->has('search')) $products = Product::with('category')->where('name', 'like', '%'.$request->search.'%')->get();

        if($request->has('search')) return view('pages.guest.search')->with("data", $products)->with("dropdown", $dropdownCategory)->with("searchData", $request->search);

        return view('pages.guest.search')->with("data", $products)->with("dropdown", $dropdownCategory);
    }

    public function category($categoryId) {
        $dropdownCategory = Category::all();
        $dataCategory = Category::where('id', '=', $categoryId)->first();
        $productCategory = $dataCategory->products()->paginate(10);

        return view('pages.guest.category')->with("dropdown", $dropdownCategory)->with("data", $productCategory)->with("dataCategory", $dataCategory);
    }

    public function detail($productId) {
        $dropdownCategory = Category::all();
        $productDetail = Product::where('id', '=', $productId)->first();

        return view('pages.guest.detail')->with("dropdown", $dropdownCategory)->with("data", $productDetail);
    }
}
