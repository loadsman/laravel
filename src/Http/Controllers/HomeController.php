<?php

namespace Loadsman\LaravelPlugin\Http\Controllers;

use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('api-tester::api-tester');
    }
}
