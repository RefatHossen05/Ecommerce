<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productlist(){
        return view('backend.pagees.product.list');
    }
    public function productform(){
        return view('backend.pagees.product.form');
    }
    
}
