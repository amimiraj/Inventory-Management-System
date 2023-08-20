<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Order;
use App\Models\Sale;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;

class SaleController extends Controller {

    public function index() {      
       $message = "";
       $userId = auth()->user()->id;
       $last_sale = DB::table('sale')->get()->last();

       if (empty($last_sale)) {
           $customer_id = 1;

           $order_view = DB::table('order')->where("customer_id", $customer_id)->where('userId', $userId)->get();
           return view('sale_view')->with("order_view", $order_view)->with("message", $message);
       } else {
           $customer_id = $last_sale->customer_id + 1;

           $order_view = DB::table('order')->where("customer_id", $customer_id)->where('userId', $userId)->get();
           return view('sale_view')->with("order_view", $order_view)->with("message", $message);
       }
       
    }


    public function delete(Request $request) {

        $order = DB::table('order')->where('order_id', $request->order_id)->get();

        $purchase = Purchase::find($order[0]->product_code);

        $updated_purchase_quantity = $purchase->product_quantity + $order[0]->product_quantity;

        $purchase['product_quantity'] = $updated_purchase_quantity;
        $purchase->update();

        DB::table('order')->where('order_id', $request->order_id)->delete();
        return redirect('/sale-view');
    }


    public function confirm_order(Request $request) {

        $userId = auth()->user()->id;
        date_default_timezone_set("Asia/Dhaka");
        $ldate =  date('Y-m-d H:i:s');

        $sale = new Sale;
        $sale['customer_id'] = $request->customer_id;
        $sale['userId'] = $userId;
        $sale['customer_Phone'] = $request->customer_phone_number;
        $sale['iteams'] = $request->iteams;
        $sale['payment_type'] = $request->payment_type;
        $sale['total'] = $request->total;
        $sale['total_purchase_price'] = $request->total_purchase_price;
        $sale['date'] = $ldate;
        $sale->save();

        // ---------------------------------------------------Email
        // $userId = auth()->user()->id;
        $branchName = auth()->user()->name;
        $purchase = DB::table('purchase')->where('userId', $userId)->get(); 

        foreach ($purchase as $value) {       
            if($value->product_quantity<5 && $value->email_status=='0'){
                $mailData=[
                    "product_name"=>"$value->product_name",
                    "product_code"=>"$value->product_name $value->purchase_id",
                    "branch"=>"$branchName"
                ];  
                        
                $supplierEmail = DB::table('supplier')->where('supplier_name', $value->supplier_name)->where('userId', $userId)->get();    
                $email=$supplierEmail[0]->supplier_email;

                Mail::to("$email")->send(new TestEmail($mailData));

                $purchase_update = Purchase::find($value->purchase_id);
                $purchase_update['email_status'] = '1';
                $purchase_update->update();

                // dd ('A message has been sent !');               
            }
        }
        // ---------------------------------------------------endEmail


        return redirect('/report');
    }

 


    
    public function addMore(Request $request) {
        
        $userId = auth()->user()->id;

        $last_sale = DB::table('sale')->get()->last();

        if (empty($last_sale)) {
            $customer_id = 1;
        } else {
            $customer_id = $last_sale->customer_id + 1;
        }


        $purchase = DB::table('purchase')->where('purchase_id',$request->product_code)->where('userId', $userId)->get();
      
        if ( isset($purchase[0]) && $purchase[0]->product_quantity >= $request->product_quantity) {

            $purchaseDB = Purchase::find($request->product_code);

            $updated_purchase_quantity = $purchase[0]->product_quantity - $request->product_quantity;

            $purchaseDB['product_quantity'] = $updated_purchase_quantity;
            $purchaseDB->update();

            $subtotal = $request->product_quantity * $purchase[0]->sale_price;
            $total_purchase_price = $request->product_quantity * $purchase[0]->purchase_price;


            $order = new Order;
            $order['customer_id'] = $customer_id;
            $order['userId'] = $userId;
            $order['product_name'] = $purchase[0]->product_name;
            $order['product_code'] = $request->product_code;
            $order['product_quantity'] = $request->product_quantity;
            $order['sale_price'] = $purchase[0]->sale_price;
            $order['subtotal'] = $subtotal;
            $order['total_purchase_price'] = $total_purchase_price;
            $order->save();

            return redirect('/sale-view');
        } else {

            $message = "Not Available";
            // return redirect('/sale-view');

            $last_sale = DB::table('sale')->get()->last();

            if (empty($last_sale)) {
                $customer_id = 1;

                $order_view = DB::table('order')->where("customer_id", $customer_id)->where('userId', $userId)->get();
                return view('sale_view')->with("order_view", $order_view)->with("message", $message);
            } else {
                $customer_id = $last_sale->customer_id + 1;

                $order_view = DB::table('order')->where("customer_id", $customer_id)->where('userId', $userId)->get();
                return view('sale_view')->with("order_view", $order_view)->with("message", $message);
            }
        }
    }


    public function confirm_page() {

        $userId = auth()->user()->id;
        $last_sale = DB::table('sale')->get()->last();

        if (empty($last_sale)) {
            $customer_id = 1;
        } else {
            $customer_id = $last_sale->customer_id + 1;
        }
        $order_view = DB::table('order')->where("customer_id", $customer_id)->where('userId', $userId)->get();
        return view('confirm_page')->with("order_view", $order_view);
    }

  
    public function order_show() {

        $userId = auth()->user()->id;

        $last_sale = DB::table('sale')->get()->last();
        if (empty($last_sale)) {
            $customer_id = 1;
        } else {
            $customer_id = $last_sale->customer_id + 1;
        }
        $message = "";

        $order_view = DB::table('order')->where("customer_id", $customer_id)->where('userId', $userId)->get();
        return view('sale_view')->with("order_view", $order_view)->with("message", $message);
    }


    public function report() {
        $userId = auth()->user()->id;
        $report = DB::table('sale')->where('userId', $userId)->get();
        return view('report')->with("report", $report);
    }

    public function view_iteams(Request $request) {
        $userId = auth()->user()->id;
        $view_iteams = DB::table('order')->where('customer_id', $request->customer_id)->where('userId', $userId)->get();
        return view('view_iteams')->with("view_iteams", $view_iteams);
    }

}
