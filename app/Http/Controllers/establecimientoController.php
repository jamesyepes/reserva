<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class establecimientoController extends Controller
{
    public function create(){
        $datos=DB::table('tipo_empresa')->get();
        return view('admin.establecimiento.create',compact('datos'));
    }

    public function index(){

        $info=DB::table('empresa')
            ->join('tipo_empresa','empresa.tipo_empresa_idtipo_empresa','=','tipo_empresa.idtipo_empresa')
            ->join('usuario','usuario.idusuario','=','empresa.usuario_idusuario')
            ->select('empresa.*','tipo_empresa.tipo','usuario.*')->get();

        return view('admin.establecimiento.index',compact('info'));
    }

    public function store(Request $request){
        
        $empresa=$request->input('empresa');
        $responsable=$request->input('representante');
        $telefono=$request->input('telefono');
        $direccion=$request->input('direccion');
        $email=$request->input('email');
        $web=$request->input('website');
        $usuario=$request->input('usuario');
        $password=$request->input('password');
        $tipo=$request->input('tipo');
        $documento=$request->input('documento');

        DB::table('usuario')->insert(['nombre_usuario'=>$usuario,'contraseña'=>$password,'rol_idrol'=>2]);
        $idusuario= DB::table('usuario')->max('idusuario');

        DB::table('empresa')->insert(['razon_social'=>$empresa,'responsable'=>$responsable,'documento'=>$documento, 'telefono'=> $telefono, 
    'direccion'=>$direccion, 'email'=>$email, 'web'=> $web,'tipo_empresa_idtipo_empresa'=>$tipo,'usuario_idusuario'=>$idusuario]);
    //return back()->with('msg','Empresa Registrada');
         return view('admin.establecimiento.store');

    }

    
}
