<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('providers.services.index');
    }
    public function create()
    {
        return view('providers.services.create');
    }
    public function edit(Product $product)
    {
        return view('providers.services.edit');
    }
    public function detail(Product $product)
    {
        return view('providers.services.detail');
    }
}
