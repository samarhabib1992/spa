<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function dashboard()
    {
        return view('providers.dashboard');
    }
    public function reports()
    {
        return view('providers.reports');
    }
    public function customers()
    {
        return view('providers.customers');
    }
}

?>