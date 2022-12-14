<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function subcategorylist(){
        return view('backend.pagees.subcategory.list');
    }

    public function subcategoryform(){
        return view('backend.pagees.subcategory.form');
    }
}