<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        return view('client.student')->with('currentPage', 'student');
    }
}
