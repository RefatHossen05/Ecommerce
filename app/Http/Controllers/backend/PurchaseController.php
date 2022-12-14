<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function purchaselist(){
        return view('backend.pagees.purchase.list');
    }

    public function purchaseform(){
        return view('backend.pagees.purchase.form');
    }
}
