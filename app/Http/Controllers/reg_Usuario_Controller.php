<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reg_Usuario_Controller extends Controller
{
    public function index(){
        return 'ver usuarios registrados por administrador';
    }

     public function create(){
        return view('/admin/usuarios/index');
    }

    public function store(Request $request){

            $usuario=$request->input('usuario');
            $password=$request->input('password');
            $confir_password=$request->input('password_confirmation');
            $nombre=$request->input('nombre');
            $apellido=$request->input('apellidos');
            $email=$request->input('email');
            $telefono=$request->input('telefono');
            $token=$request->input('_token');

            if($password!=$confir_password){
                return "en campo de passwor y confirmacion de passwor no coinciden";
            }
            else{

               // DB::table('usuario')->insert(['nombre_usuario'=>$usuario,'contraseña'=>$password,'rol_idrol'=>1]);
               
                //tabla user
                DB::table('users')->insert(['name'=>$usuario, 'email'=>$email,'password'=>bcrypt($password),'remember_token'=>$token,'fk_idrol'=>1]);
                 $idusuario= DB::table('users')->max('id');

                DB::table('admin')->insert(['nombre'=>$usuario,'apellido'=>$apellido,'telefono'=>$telefono, 'email'=>$email,'usuario_idusuario'=>$idusuario]);

            }
            return back();
    }
}
