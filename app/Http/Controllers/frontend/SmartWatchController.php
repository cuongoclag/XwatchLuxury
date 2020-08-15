<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SmartWatchController extends FrontendController
{
    public function index(){
        return view('frontend.SmartWatch.index_SmartWatch');
    }
}
