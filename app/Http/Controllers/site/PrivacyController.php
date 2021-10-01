<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function privacy(){
        return view('front.privacy');
    }
}
