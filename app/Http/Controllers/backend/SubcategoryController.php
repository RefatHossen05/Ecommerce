<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;

class SubcategoryController extends Controller
{
    public function subcategorylist(){
        $subcategories = Subcategory::all();
        return view('backend.pagees.subcategory.list',compact('subcategories'));
    }

    public function subcategoryform(){
        return view('backend.pagees.subcategory.form');
    }

    public function subcatstore(Request $request){
        Subcategory::create([
            'subcategory_name'=>$request->subcategory_name,
        ]);
        return to_route('subcategory.list')->with('success','Created Successful');
    }

    public function subcategorydelete($id){
        Subcategory::find($id)->delete();
        return back();
    }
    public function subcategoryedit($id){
        $subcategories = Subcategory::find($id);
        return view('backend.pagees.subcategory.edit',compact('subcategories'));
    }

    public function subcategoryupdate(Request $request,$id){
        $subcate = Subcategory::find($id);

        $subcate->update([
            'subcategory_name'=>$request->subcategory_name,
        ]);
        return to_route('subcategory.list');


    }

} 


