<?php

namespace App\Http\Controllers;

use App\Opinion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $opinions = Opinion::orderBy('id','DESC')->get()->load('user');
        return view('tutor.index',compact('opinions'));
    }
}
