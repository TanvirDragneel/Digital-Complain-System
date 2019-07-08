<?php

namespace App\Http\Controllers;

use App\complainbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $complain_data_by_user = complainbox::all()->where('judge_status','=','0')->where('user_id','=',Auth::id());
        $solvedtata = complainbox::all()->where('user_id','=',Auth::id())->where('judge_status','=',1)->sortBy('judge_status');

        return view('index')->with('cdata',$complain_data_by_user)->with('cdatas',$solvedtata);
    }
}
