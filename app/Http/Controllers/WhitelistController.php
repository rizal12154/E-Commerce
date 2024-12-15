<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhitelistController extends Controller
{
    public function index() {
        return view('check.whitelist');
    }
}
