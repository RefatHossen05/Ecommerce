<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function feedbacklist(){
        return view('backend.pagees.feedback.list');
    }

    public function feedbackform(){
        return view('backend.pagees.feedback.form');
    }
}
