<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homepage;

class Home extends Controller
{
    public function index()
    {
        return view('home.index');
    }
}
