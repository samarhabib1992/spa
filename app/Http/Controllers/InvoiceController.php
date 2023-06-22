<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('providers.invoices.index');
    }
    public function create()
    {
        return view('providers.invoices.create');
    }
    public function detail(Product $product)
    {
        return view('providers.invoices.detail');
    }
}
