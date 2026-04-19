<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostandChargesController extends Controller
{
    public function index(){
        return view('cost-and-charges');
    }
}
