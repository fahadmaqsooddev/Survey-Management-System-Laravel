<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoiseSurveyReportController extends Controller
{
    public function index(){
        return view('noise-survey-report');
    }
}
