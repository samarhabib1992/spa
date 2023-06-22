<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('providers.orders.index');
    }
    public function reviews()
    {
        return view('providers.orders.reviews');
    }
}
