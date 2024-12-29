<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class Contact extends Controller
{
    public function index()
    {
        return view('home.contact');
    }
}
