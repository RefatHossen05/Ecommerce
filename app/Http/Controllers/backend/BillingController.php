<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function billinglist(){
        return view('backend.pagees.billing.list');
    }

    public function billingform(){
        return view('backend.pagees.billing.form');
    }
}
