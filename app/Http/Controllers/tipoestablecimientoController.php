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
      
        return view('admin.tipoEstablecimiento.index');
    }
    
    public function create(){
        $datos2=DB::table('tipo_empresa')->get();
        return view('admin.tipoEstablecimiento.create', compact('datos2'));
    } 

     public function store(Request $request){
      //  DB::table('tipo_empresa')->insert(['tipo'=>$tipoempresa]);
        $name = $request->input('tipoempresa');
        DB::table('tipo_empresa')->insert(['tipo'=>$name]);
          return back();
        //return view('admin.tipoEstablecimiento.store',compact('name'));
    }   
}
