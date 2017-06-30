<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class tipoestablecimientoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $datos=DB::table('tipo_empresa')->get();
        return view('admin.tipoEstablecimiento.index', compact($datos));
    }
    
    public function create(){
        $datos2=DB::table('tipo_empresa')->get();
        return view('admin.tipoEstablecimiento.create', compact('datos2'));
    }    
}
