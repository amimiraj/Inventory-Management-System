<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller {

    public function index() {
        return view('addBrand');
    }

    public function saveBrand(Request $request) {

        $brand = new Brand;
        $brand['brand_name'] = $request->brand_name;
        $brand['brand_country'] = $request->brand_country;
        $brand['userId'] = $request->userId;
        $brand->save();

        return redirect('/manageBrand');
    }

    public function manageBrand() {

        $userId = auth()->user()->id;

        $brand = DB::table('brand')->where('userId', $userId)->get();
        return view('manageBrand')->with("brand", $brand);
    }

    public function editBrand(Request $request) {


        $userId = auth()->user()->id;
        $brand = DB::table('brand')->where('userId', $userId)->where('brand_id', $request->brand_id)->get();

        return view('/editBrand')->with("brand", $brand);
    }

    public function updateBrand(Request $request, $id) {

        $brand = Brand::find($id);
        
        $brand ['brand_name'] = $request->brand_name;
        $brand ['brand_country'] = $request->brand_country;
        $brand->update();

        return redirect('/manageBrand');
    }


    public function deleteBrand(Request $request) {

        DB::table('brand')->where('brand_id', $request->brand_id)->delete();

          return redirect('/manageBrand');
    }

}
