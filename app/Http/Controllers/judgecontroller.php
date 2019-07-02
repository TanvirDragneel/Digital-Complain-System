<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;

class judgecontroller extends Controller
{
    //
    public function index()
    {
        $judgeData= category::all();
        return view('judges')->with('judges',$judgeData);

    }
}
