<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller {

    public function addProduct() {

        $userId = auth()->user()->id;
        $select_category = DB::table('category')->where('userId', $userId)->get();
        return view('addProduct')->with('select_category', $select_category);
    }

    public function saveProduct(Request $request) {

        $userId = auth()->user()->id;

        $product = new Product;
        $product['product_name'] = $request->product_name;
        $product['product_description'] = $request->product_description;
        $product['product_category'] = $request->category_name;
        $product['userId'] = $userId;
        $p_code = $request->product_name . "" . auth()->user()->id;
        $product['product_code'] = $p_code;
        $product->save();
        return redirect('/manageProduct');
    }

    public function manageProduct() {

        $userId = auth()->user()->id;
        $product = DB::table('product')->where('userId', $userId)->get();
        return view('manageProduct')->with("product", $product);
    }

    public function deleteProduct(Request $request) {

        DB::table('product')->where('product_id', $request->product_id)->delete();
        return redirect('/manageProduct');
    }

}
