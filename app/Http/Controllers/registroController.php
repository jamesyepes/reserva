<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registroController extends Controller
{
    //ESTE ES EL CONTROLADOR PARA REGISTRAR EMPRESAS DESDE LA SECCION PUBLICA DE LA WEB PRINCIPAL
    public function index(){

         $datos=DB::table('tipo_empresa')->get();
        return view('registro', compact('datos'));
     
    }
    

    public function storeempresa(Request $request){

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
            $token=$request->input('_token');

        DB::table('usuario')->insert(['nombre_usuario'=>$usuario,'contraseña'=>$password,'rol_idrol'=>2]);
        $idusuario= DB::table('usuario')->max('idusuario');

         //tabla user
         DB::table('users')->insert(['name'=>$usuario, 'email'=>$email,'password'=>bcrypt($password),'remember_token'=>$token,'fk_idrol'=>2]);

        DB::table('empresa')->insert(['razon_social'=>$empresa,'responsable'=>$responsable,'documento'=>$documento, 'telefono'=> $telefono, 
         'direccion'=>$direccion, 'email'=>$email, 'web'=> $web,'tipo_empresa_idtipo_empresa'=>$tipo,'usuario_idusuario'=>$idusuario]);
    //return back()->with('msg','Empresa Registrada');
         return back();

    }

    public function storecliente(Request $request){

          $usuario=$request->input('usuario');
          $password=$request->input('password');
          $nombre=$request->input('nombre');
          $apellido=$request->input('apellidos');
          $email=$request->input('email');
          $telefono=$request->input('telefono');
           $token=$request->input('_token');

        DB::table('usuario')->insert(['nombre_usuario'=>$usuario,'contraseña'=>$password,'rol_idrol'=>3]);
        $idusuario= DB::table('usuario')->max('idusuario');

        DB::table('users')->insert(['name'=>$usuario, 'email'=>$email,'password'=>bcrypt($password),'remember_token'=>$token,'fk_idrol'=>3]);


        DB::table('cliente')->insert(['nombre'=>$nombre, 'telefono'=> $telefono, 
        'email'=>$email, 'apellido'=>$apellido,'usuario_idusuario'=>$idusuario]);
    //return back()->with('msg','Empresa Registrada');
         return back();

    }

}
