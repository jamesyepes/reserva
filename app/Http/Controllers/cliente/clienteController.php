<?php

namespace App\Http\Controllers\cliente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class clienteController extends Controller
{
    

    public function update(Request $request,$id){
        $idclientesession=Auth::user()->id;
       // $id=DB::table('cliente')->select('idcliente')->where('usuario_idusuario','=', $idclientesession)->get();
       // return "".Auth::user()->id." ".Auth::user()->name." ".$id;
        // $id=$req->input('idtpe');
            $nombre=$request->input('nombre');
            $apellido=$request->input('apellidos');
            $fecha=$request->input('fecha_nacimiento');
            $telefono=$request->input('telefono');
            $sexo=$request->input('sexo');
        
       $resp= DB::table('cliente')
            ->where('fk_user',$idclientesession)
            ->update(['nombre'=>$nombre,'apellido'=>$apellido,'sexo'=>$sexo,'fecha_nacimiento'=>$fecha,'telefono'=>$telefono]);

            
        return back()->with('msj',$resp);
    }
}
