<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        return view('client.home')->with('currentPage', 'home');
    }
}
