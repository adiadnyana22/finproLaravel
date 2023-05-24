<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManageProductController extends Controller
{
    public function index(Request $request) {
        $dropdownCategory = Category::all();
        $products = Product::with('category')->search()->paginate(10)->withQueryString();

        if($request->has('search')){
            return view('pages.user.manage')->with("data", $products)->with("dropdown", $dropdownCategory)->with("searchData", $request->search);
        }

        return view('pages.user.manage')->with("data", $products)->with("dropdown", $dropdownCategory);
    }

    public function add(Request $request) {
        $dropdownCategory = Category::all();

        return view('pages.user.add')->with("dropdown", $dropdownCategory);
    }

    public function addMethod(Request $request) {
        $validateReq = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'detail' => 'required',
            'price' => 'required|integer',
            'photo' => 'required|image|file|mimes:jpeg,jpg,png|max:2048'
        ]);

        $newProduct = new Product();
        $newProduct->name = $request->name;
        $newProduct->category_id = $request->category;
        $newProduct->detail = $request->detail;
        $newProduct->price = $request->price;
        $newProduct->photo = $request->file('photo')->store('products');;
        $newProduct->save();

        return redirect()->route('manageProduct')->with("success", "Product Added Successfully");
    }

    public function edit(Product $product, Request $request) {
        $dropdownCategory = Category::all();

        return view('pages.user.edit')->with("dropdown", $dropdownCategory)->with("product", $product);
    }

    public function editMethod(Product $product, Request $request) {
        $validateReq = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'detail' => 'required',
            'price' => 'required|integer',
            'photo' => 'image|file|mimes:jpeg,jpg,png|max:2048'
        ]);

        $product->name = $request->name;
        $product->category_id = $request->category;
        $product->detail = $request->detail;
        $product->price = $request->price;
        if($request->file('photo')){
            Storage::delete($request->oldPhoto);
            $product->photo = $request->file('photo')->store('products');
        };
        $product->save();

        return redirect()->route('manageProduct')->with("success", "Product Edited Successfully");
    }

    public function deleteMethod(Product $product) {
        Storage::delete($product->photo);
        $product->delete();

        return redirect()->route('manageProduct');
    }
}
