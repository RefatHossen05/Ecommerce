<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function productlist(){
        $products = Product::all();
        return view('backend.pagees.product.list',compact('products'));
    }
    public function productform(){
        return view('backend.pagees.product.form');
    }

    public function productstore(Request $request){

        $filename=null;
        if($request->hasfile('image')){
            $filename =date('Ymdhmsis').'.'.$request->file('image')->getClientOriginalExtension();

            $request->file('image')->storeAs('/uploads/product/',$filename);
        }
        Product::create([
            'product_name'=>$request->product_name,
            'product_warenty'=>$request->product_warenty,
            'stock_status'=>$request->stock_status,
            'image'=>$filename,
        ]);
        return to_route('product.list');
    }  

    public function productdelete($id){
        Product::find($id)->delete();
        return back();
    }

    public function productedit($id){
        $products = Product::find($id);
        return view('backend.pagees.product.editform',compact('products'));
    }

    public function productupdate(Request $request,$id){
        $products = Product::find($id);
        $filename=$products->image;
        if($request->hasfile('image')){
            $removefile = public_path().'/uploads/product/'.$filename;
            File::delete($removefile);
            $filename =date('Ymdhmsis').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads/product/',$filename);
        }
    
        $products->update([
            'product_name'=>$request->product_name,
            'product_warenty'=>$request->product_warenty,
            'stock_status'=>$request->stock_status,
            'image'=>$filename,
        ]);
        return to_route('product.list');
    }
}
