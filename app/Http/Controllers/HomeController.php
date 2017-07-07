<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rol=Auth::user()->fk_idrol;
        
        if($rol == 1)
        {
             return view('admin/index');
           
        }
       if($rol == 2)
        {
             return view('empresa/index');
           // return "no eres davo".Auth::user()->name;
        }
         if($rol == 3)
        {
             return view('cliente/index');
           // return "no eres davo".Auth::user()->name;
        }
       
    }
}
