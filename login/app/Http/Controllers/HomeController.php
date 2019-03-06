<?php

namespace App\Http\Controllers;

use App\Session;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Session::whereNotNull('user_id')->get(); 
        $loggedUsers = count($all);
        return view('home', compact('loggedUsers'));
    }
}