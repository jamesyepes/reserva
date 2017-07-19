<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class registroController extends Controller
{
    //ESTE ES EL CONTROLADOR PARA REGISTRAR EMPRESAS DESDE LA SECCION PUBLICA DE LA WEB PRINCIPAL
    public function index(){

         $datos=DB::table('tipo_empresa')->get();
        return view('registro', compact('datos'));
     
    }
    

    public function storeempresa(Request $request){

            $this->validate($request, [
                                 'empresa'=>'required',
                                 'representante'=>'required',
                                 'documento'=>'required',
                                  'email'=>'required|unique:empresa,email',
                                  'nit'=>'required',
                                  'usuario'=>'required',
                                  'password'=>'required|string|min:8|confirmed',
                                  'tipo'=>'required'               
                            ]);

            $empresa=$request->input('empresa');
            $responsable=$request->input('representante');
            $telefono=$request->input('telefono');
            $direccion=$request->input('direccion');
            $email=$request->input('email');
            $web=$request->input('website');
            $usuario=$request->input('usuario');
            $password=$request->input('password');
             $nit=$request->input('nit');
            $tipo=$request->input('tipo');
            $documento=$request->input('documento');
            $token=$request->input('_token');

     try{
            //tabla user
            DB::table('users')->insert(['name'=>$usuario, 'email'=>$email,'password'=>bcrypt($password),'remember_token'=>$token,'fk_idrol'=>2]);
            $idusuario= DB::table('users')->max('id');//mejor forma es hacerlo con el correo y buscar id

            DB::table('empresa')->insert(['nit'=>$nit,'razon_social'=>$empresa,'responsable'=>$responsable,'documento'=>$documento, 'telefono'=> $telefono, 
            'direccion'=>$direccion, 'email'=>$email, 'web'=> $web,'tipo_empresa_idtipo_empresa'=>$tipo,'usuario_idusuario'=>$idusuario]);
       
            return back()->with('msj','Empresa Registrada');
           

          } catch (QueryException $ex) {
              
                    return back()->with('msj',$ex->getMessage());
                

            } catch (QueryException $ex) {
                // something went wrong elsewhere, handle gracefully
                  return back()->with('msj',$ex->getMessage());
            }


    }

    public function storecliente(Request $request){

            $this->validate($request, [
                    'email' => 'required|unique:users,email',
                    'usuario' => 'required',
                    'nombre' => 'required',
                    'password'=>'required|string|min:8|confirmed'                    
                ]);


          $usuario=$request->input('usuario');
          $password=$request->input('password');
          $nombre=$request->input('nombre');
          $apellido=$request->input('apellidos');
          $email=$request->input('email');
          $telefono=$request->input('telefono');
          $token=$request->input('_token');


          try{

                    DB::table('users')->insert(['name'=>$usuario, 'email'=>$email,'password'=>bcrypt($password),'remember_token'=>$token,'fk_idrol'=>3]);
                    $idusuario= DB::table('users')->max('id');

                    DB::table('cliente')->insert(['nombre'=>$nombre, 'telefono'=> $telefono, 
                    'email'=>$email, 'apellido'=>$apellido,'fk_user'=>$idusuario]);
                    
                return back()->with('msj','Cliente Registrado');
                    

          } catch (QueryException $ex) {
              
                    return back()->with('msj',$ex->getMessage());
                

            } catch (QueryException $ex) {
                // something went wrong elsewhere, handle gracefully
                  return back()->with('msj',$ex->getMessage());
            }

      

    }

}
