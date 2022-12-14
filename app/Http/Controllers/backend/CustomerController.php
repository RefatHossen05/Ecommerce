<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerlist(){
        return view('backend.pagees.customer.list');
    }

    public function customerform(){
        return view('backend.pagees.customer.form');
    }
}
