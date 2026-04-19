<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactDetail as ContactDetailModel;
class ContactUsController extends Controller
{
    public function index(){
        $contact_detail=ContactDetailModel::first();
        return view('contact-us',compact('contact_detail'));
    }
}
