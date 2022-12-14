<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CancellationController extends Controller
{
    public function createlist(){
        return view('backend.pagees.cancellation.list');
    }

    public function createform(){
        return view('backend.pagees.cancellation.form');
    }
}
