<?php

namespace Sharmaji\Jsonviewer\Http\Controllers;

use Illuminate\Routing\Controller as Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('Jsonviewer::welcome');
    }
}
