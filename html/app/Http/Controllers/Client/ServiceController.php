<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\ActivePlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ServiceController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        return view('client.service')->with('currentPage', 'service');
    }

    public function store(Request $request)
    {
        Mail::to(env('ACTIVE_PLAN_EMAIL'))->send(new ActivePlan($request->all()));
        return view('client.service')->with('currentPage', 'service');
    }
}
