<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        return view('pembayaran.index');
    }
    
    public function create()
    {
        return view('pembayaran.create');
    }
}
