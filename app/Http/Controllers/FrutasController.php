<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class FrutasController extends Controller
{
    //Accion que devuelva la vista
    public function getIndex(){
    	return view('frutas.index')
    	->with('frutas',array('melocoton','naranja','pera','piña','platano' ));
    }
    public function getNaranjas(){
    	return 'Accion de Naranjas';
    }
    public function getPeras(){
    	return 'Accion de Peras ';
    }
    public function recibirFormulario(Request $request){
            $data = $request;

            return 'El nombre de la fruta es '.$request->input('nombre');  
    }
}

