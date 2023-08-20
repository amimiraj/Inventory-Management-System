<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Order;
use App\Models\Sale;
use App\Models\Purchase;
use App\Http\Controllers\Carbon;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;

class HomeController extends Controller {

  
    public function __construct() {
        $this->middleware('auth');
    }
    

  
    public function index() {
   

        if (auth()->user()->name == 'Admin') {

            $userId = auth()->user()->id;
            date_default_timezone_set("Asia/Dhaka");

            $ldate = date('Y-m-d');


            $todaySale= DB::table('sale')->where('date', $ldate)->sum('total');
            $todayCost= DB::table('sale')->where('date', $ldate)->sum('total_purchase_price');
            $todayProfit=$todaySale-$todayCost;

            $currentMonth = date('m');
            $thisMonthSale = DB::table("sale")->whereRaw('MONTH(date) = ?',[$currentMonth])->sum('total');
            $thisMonthCost= DB::table("sale")->whereRaw('MONTH(date) = ?',[$currentMonth])->sum('total_purchase_price');
            $thisMonthProfit=$thisMonthSale-$thisMonthCost;

            
            $content = view('adminDashboard',['todaySale' => $todaySale],['todayProfit' => $todayProfit])->with('thisMonthSale', $thisMonthSale)->with('thisMonthProfit', $thisMonthProfit);

            return view("adminWelcome")->with('adminDashboard', $content);


            $content = view('adminDashboard');
            return view("adminWelcome")->with('adminDashboard', $content);

        } else {

            $userId = auth()->user()->id;
            date_default_timezone_set("Asia/Dhaka");
            $ldate = date('Y-m-d');
    
            $todaySale= DB::table('sale')->where('date', $ldate)->where('userId', $userId)->sum('total');
            $todayCost= DB::table('sale')->where('date', $ldate)->where('userId', $userId)->sum('total_purchase_price');
            $todayProfit=$todaySale-$todayCost;

            $currentMonth = date('m');
            $thisMonthSale = DB::table("sale")->whereRaw('MONTH(date) = ?',[$currentMonth])->where('userId', $userId)->sum('total');
            $thisMonthCost= DB::table("sale")->whereRaw('MONTH(date) = ?',[$currentMonth])->where('userId', $userId)->sum('total_purchase_price');
            $thisMonthProfit=$thisMonthSale-$thisMonthCost;

            $content = view('dashboard',['todaySale' => $todaySale],['todayProfit' => $todayProfit])->with('thisMonthSale', $thisMonthSale)->with('thisMonthProfit', $thisMonthProfit);
            return view("welcome")->with('dashboard', $content);
        }
    }


    public function addAccount() {

        $content = view('addAccount');
        return view("adminWelcome")->with('adminDashboard', $content);
    }



    public function saveAccountInfo(Request $request) {

        $users = DB::table('users')->where('email', $request->email)->get();

        if (sizeof($users) == 0) {

            $user = new User;
            $user['name'] = $request->name;
            $user['email'] = $request->email;
            $var = Hash::make($request->password);
            $user['password'] = $var;
            $user->save();

            $users = DB::table('users')->where('id', '>', 1)->get();
            return redirect('/manageAccount')->with("users", $users);
        } else {
            
            
             Session::put("account_status","Try Again");
            
            $content = view('addAccount');
            return view("adminWelcome")->with('adminDashboard', $content);
            
            
        }
    }



    public function manageAccount() {

        $users = DB::table('users')->where('id', '>', 1)->get();
        return view('manageAccount')->with("users", $users);
    }




    public function deleteAccount(Request $request) {

        DB::table('users')->where('id', $request->id)->delete();

        $users = DB::table('users')->where('id', '>', 1)->get();
        return redirect('/manageAccount')->with("users", $users);
    }



    public function  adminStock() {

        $users = DB::table('users')->where('id', '>', 1)->get();
        return view('adminStock')->with("users", $users);
    }

    public function viewAdminStock(Request $request) {
        $userId = $request->id;    
        $purchase = DB::table('purchase')->where('userId', $userId)->get();
        return view('viewAdminStock')->with("purchase", $purchase);
    }



    public function  adminReport() {

        $users = DB::table('users')->where('id', '>', 1)->get();
        return view('adminReport')->with("users", $users);
    }


    public function viewAdminReport(Request $request) {
        $userId = $request->id;   
        $report = DB::table('sale')->where('userId', $userId)->get();
        return view('viewAdminreport')->with("report", $report)->with('userId', $userId);;
    }



    public function view_iteams_AdminReport(Request $request) {
        $userId = $request->userId;  
        
        $view_iteams = DB::table('order')->where('customer_id', $request->customer_id)->where('userId', $userId)->get();
        return view('view_iteams_AdminReport')->with("view_iteams", $view_iteams);
    }



    
    // public function sendMail() {
    //     $userId = auth()->user()->id;
    //     $branchName = auth()->user()->name;
    //     $purchase = DB::table('purchase')->where('userId', $userId)->get(); 
    //     foreach ($purchase as $value) {  
              
    //         if($value->product_quantity<5 && $value->email_status=='0'){
    //             $mailData=[
    //                 "product_name"=>"$value->product_name",
    //                 "product_code"=>"$value->product_name $value->purchase_id",
    //                 "branch"=>"$branchName"
    //             ];                          
    //             $supplierEmail = DB::table('supplier')->where('supplier_name', $value->supplier_name)->where('userId', $userId)->get();    
                
    //             $email=$supplierEmail[0]->supplier_email;

    //              Mail::to("$email")->send(new TestEmail($mailData));

    //              $purchase_update = Purchase::find($value->purchase_id);
    //              $purchase_update['email_status'] = '1';
    //              $purchase_update->update();

    //             dd ('A message has been sent !');               
    //         }
    //       }
    // }





}
