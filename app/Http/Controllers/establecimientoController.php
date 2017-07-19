<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Admin_Establecimiento_Request;
use Illuminate\Database\QueryException;

class establecimientoController extends Controller
{
    public function create(){
        $datos=DB::table('tipo_empresa')->get();
        return view('admin.establecimiento.create',compact('datos'));
    }

    public function index(){

        $info=DB::table('empresa')
            ->join('tipo_empresa','empresa.tipo_empresa_idtipo_empresa','=','tipo_empresa.idtipo_empresa')
            ->join('users','users.id','=','empresa.usuario_idusuario')
            ->select('empresa.*','tipo_empresa.tipo','users.*')->get();

        return view('admin.establecimiento.index',compact('info'));
    }

    public function store(Admin_Establecimiento_Request $request){
        
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
        $nit=$request->input('nit');
        $token=$request->input('_token');
        
      
       // DB::table('usuario')->insert(['nombre_usuario'=>$usuario,'contraseña'=>$password,'rol_idrol'=>2]);
       
        try {
                // do your database transaction here

            DB::table('users')->insert(['name'=>$usuario, 'email'=>$email,'password'=>bcrypt($password),'remember_token'=>$token,'fk_idrol'=>2]);
             $idusuario= DB::table('users')->max('id');

                DB::table('empresa')->insert(['nit'=>$nit,'razon_social'=>$empresa,'responsable'=>$responsable,'documento'=>$documento, 'telefono'=> $telefono, 
                'direccion'=>$direccion, 'email'=>$email, 'web'=> $web,'tipo_empresa_idtipo_empresa'=>$tipo,'usuario_idusuario'=>$idusuario]);
                
                return back()->with('msg','Empresa Registrada');

            } catch (QueryException $ex) {
                // something went wrong with the transaction, rollback
                 //return back()->with('msj','Establecimiento Registrado con Exito');
                  
                
                    return back()->with('msj',$ex->getMessage());
                

            } catch (QueryException $ex) {
                // something went wrong elsewhere, handle gracefully
                  return back()->with('msj',$ex->getMessage());
            }

       
    //return back()->with('msg','Empresa Registrada');
        

    }

    
}
