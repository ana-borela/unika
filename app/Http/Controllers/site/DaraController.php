<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DaraController extends Controller
{
    public function dara(){
        return view('front.dara');
    }
}
