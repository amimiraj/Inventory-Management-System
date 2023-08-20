<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller {

    public function index() {
        return view('addCategory');
    }

    public function saveCategory(Request $request) {

        $category = new Category;
        $category['category_name'] = $request->category_name;
        $category['userId'] = auth()->user()->id;
        $category->save();

        return redirect('/manageCategory');
    }

    public function manageCategory() {

        $userId = auth()->user()->id;        
        $category = DB::table('category')->where('userId', $userId)->get();
        return view('manageCategory')->with("category", $category);
    }


    public function deleteCategory(Request $request) {

        DB::table('category')->where('category_id', $request->category_id)->delete();

        return redirect('/manageCategory');
    }

}
