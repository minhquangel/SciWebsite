<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourismController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        return view('client.tourism')->with('currentPage', 'tourism');
    }
}
