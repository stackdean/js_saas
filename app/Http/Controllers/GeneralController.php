<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function frontpage()
    {
        return view('home');
    }

    public function testauth()
    {
        return view('testing');
    }
}
