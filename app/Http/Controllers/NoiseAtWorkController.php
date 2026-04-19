<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoiseAtWorkController extends Controller
{
    public function index(){
        return view('noise-at-work');
    }
}
