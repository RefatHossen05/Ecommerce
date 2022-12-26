<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function customerlist(){
        $customers = Customer::all();
        return view('backend.pagees.customer.list',compact('customers'));
    }

    public function customerform(){
        return view('backend.pagees.customer.form');
    }

    public function customerstore(Request $request){
        Customer::create([
            'customer_name'=>$request->customer_name,
        ]);
        return to_route('customer.list');
    }

    public function customerdelete($id){
        Customer::find($id)->delete();
        return back();
    }

    public function customeredit($id){
        $customers = Customer::find($id);
        return view('backend.pagees.customer.editform',compact('customers'));
    }

    public function customerupdate(Request $request,$id){
        $customers = Customer::find($id);
        $customers->update([
            'customer_name'=>$request->customer_name,
        ]);
    }
   
}
