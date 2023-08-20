<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller {

    public function index() {

        return view('addSupplier');
    }


    public function store(Request $request) {

        $supplier = new Supplier;
        $supplier['supplier_name'] = $request->name;
        $supplier['supplier_Phone_num'] = $request->phoneNumber;
        $supplier['supplier_email'] = $request->email;

        $supplier['userId'] = $request->userId;      
        $supplier->save();
        
         return redirect('/manageSupplier');
    }


    public function manageSupplier() {
        
        $userId=auth()->user()->id;
        $Supplier = DB::table('supplier')->where('userId',$userId)->get();
        return view('manageSupplier')->with("supplier", $Supplier);
    }

    
    public function editSupplier(Request $request) {


        $supplier = DB::table('supplier')->where('supplier_id', $request->supplier_id)->get();

        return view('editSupplier')->with("supplier", $supplier);
    }

    
   
    public function updateSupplier(Request $request, $id) {

        $supplier = Supplier::find($id);     
        
        $supplier ['supplier_name'] = $request->supplier_name;
        $supplier ['supplier_Phone_num'] = $request->supplier_Phone_num;
        $supplier ['supplier_email'] = $request->email;

        $supplier->update();
        
        return redirect('/manageSupplier');
        
        
    }

 
    public function deleteSupplier(Request $request) {

        DB::table('supplier')->where('supplier_id', $request->supplier_id)->delete();

        return redirect('/manageSupplier');
    }

}
