<?php

namespace App\Http\Controllers;

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
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }
    
    public function cp()
    {
        return view('sci/cp');
    }
    
    public function diagnostico()
    {
        return view('sci/diagnostico');
    }
    
    public function plan()
    {
        return view('sci/plan');
    }
    
}
