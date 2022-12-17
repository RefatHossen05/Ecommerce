<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;

class SubcategoryController extends Controller
{
    public function subcategorylist(){
        return view('backend.pagees.subcategory.list');
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
}