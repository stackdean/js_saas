<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function frontpage()
    {
        $query['services']= Package::all();
        return view('home',$query);
    }

}
