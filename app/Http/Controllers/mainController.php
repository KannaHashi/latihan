<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    function index()
    {
        return view('homeblade/index');
    }
    function about()
    {
        return view('homeblade/about');
    }
}
