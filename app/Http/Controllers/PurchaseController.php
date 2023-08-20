<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller {

    public function purchase() {

        $userId = auth()->user()->id;
        $brand = DB::table('brand')->where('userId', $userId)->get();
        $product = DB::table('product')->where('userId', $userId)->get();
        $supplier = DB::table('supplier')->where('userId', $userId)->get();

        return view('purchase')->with("brand", $brand)->with("product", $product)->with("supplier", $supplier);
    }

    public function savePurchase(Request $request) {

        $userId = auth()->user()->id;

        $find_product = DB::table('purchase')->where('userId', $userId)->where("product_name", $request->product_name)->get();

        foreach ($find_product as $value) {

            if ($value->product_name == $request->product_name && $value->brand_name == $request->brand_name && $value->supplier_name == $request->supplier_name && $value->purchase_price == $request->purchase_price && $value->sale_price == $request->sale_price) {

                $updated_quantity = $value->product_quantity + $request->product_quantity;

                $purchase_update = Purchase::find($value->purchase_id);
                $purchase_update['product_name'] = $request->product_name;
                $purchase_update['brand_name'] = $request->brand_name;
                $purchase_update['supplier_name'] = $request->supplier_name;
                $purchase_update['product_quantity'] = $updated_quantity;
                $purchase_update['purchase_price'] = $request->purchase_price;
                $purchase_update['sale_price'] = $request->sale_price;
                $purchase_update['email_status'] = '0';

                $purchase_update->update();

                $brand = DB::table('brand')->where('userId', $userId)->get();
                $product = DB::table('product')->where('userId', $userId)->get();
                $supplier = DB::table('supplier')->where('userId', $userId)->get();

                return redirect('/stock');

            }
        }

        $purchase = new Purchase;
        $purchase['product_name'] = $request->product_name;
        $purchase['brand_name'] = $request->brand_name;
        $purchase['supplier_name'] = $request->supplier_name;
        $purchase['product_quantity'] = $request->product_quantity;
        $purchase['purchase_price'] = $request->purchase_price;
        $purchase['sale_price'] = $request->sale_price;
        $purchase['userId'] = $userId;
        $purchase['email_status'] = '0';
        $purchase->save();

        $brand = DB::table('brand')->where('userId', $userId)->get();
        $product = DB::table('product')->where('userId', $userId)->get();
        $supplier = DB::table('supplier')->where('userId', $userId)->get();

        return redirect('/stock');
    }






    public function stock(Request $request) {

        // agy use korechi dorkar lagy naki ajonno rekhe dilam
        // $purchase = DB::table('purchase')
        // ->join('product', 'purchase.product_name', '=', 'product.product_name')
        // ->select('purchase.*', 'product.product_code')
        // ->where('purchase.userId', $userId)->get();

        $userId = auth()->user()->id;
        
        $purchase = DB::table('purchase')->where('userId', $userId)->get();
                     

        return view('stock')->with("purchase", $purchase);
    }

}
