<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function categorylist(){
        $categoryies = Category::all();
        return view('backend.pagees.category.list',compact('categoryies'));
    }

    public function categoryform(){
        return view('backend.pagees.category.form');
    }

    public function categorystore(Request $request){
        $request->validate([
            'category_name'=>'required',
        ]);
        Category::create([
            'category_name'=>$request->category_name
        ]);
        return to_route('category.list')->with('success','Created Successfully');
    }


        public function categorydelete($id){
            Category::find($id)->delete();
            return back();           
        }

        public function categoryedit($id){
            $categoryies = Category::find($id);
            return view('backend.pagees.category.editform',compact('categoryies'));
        }
        

        public function updateform(Request $request, $id){
            $categoryies = Category::find($id);
            
            $categoryies->update([
                'category_name'=>$request->category_name,
            ]);
            return to_route('category.list')->with('success','Created Successfully');
        }
}
