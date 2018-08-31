<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Afiliado;
use App\Beneficiario;
use App\File;

class AfiliadosController extends Controller
{
  public function index (Request $request) {

  	$afiliados = Afiliado::orderBy('id','ASC')
								->seach($request->q)
  							->paginate(5);
  	return view('afiliados.index')->with('afiliados', $afiliados);
  }

  public function create () {
  	return view('afiliados.create');
  }

  public function store(Request $request) {

    	$afiliado = new Afiliado;
    	$afiliado->first_name = $request->first_name;
    	$afiliado->last_name = $request->last_name;
    	$afiliado->identification = $request->identification;
    	$afiliado->age = $request->age;
    	$afiliado->departamento = $request->departamento;
    	$afiliado->ciudad = $request->ciudad;
    	$afiliado->phone = $request->phone;
    	$afiliado->cellphone = $request->cellphone;
    	$afiliado->email = $request->email;
    	$afiliado->profession = $request->profession;
    	$afiliado->expeciality = $request->expeciality;
    	$afiliado->empresa = $request->empresa;
    	$afiliado->caja_compensacion = $request->caja_compensacion;
    	$afiliado->eps_actual = $request->eps_actual;
    	$afiliado->arl_actual = $request->arl_actual;
    	$afiliado->afp_actual = $request->afp_actual;
    	$afiliado->tipo_afiliacion = $request->tipo_afiliacion;
    	$afiliado->save();

    	$beneficiario = new Beneficiario;
    	$beneficiario->nombre_beneficiario = $request->nombre_beneficiario;
    	$beneficiario->cedula_beneficiario = $request->cedula_beneficiario;
    	$beneficiario->apellido_beneficiario = $request->apellido_beneficiario;
    	$beneficiario->edad_beneficiario = $request->edad_beneficiario;
    	$beneficiario->parentesco = $request->parentesco;
    	$beneficiario->afiliado()->associate($afiliado);
    	$beneficiario->save();

      if($request->hasFile('file')){
        $fil= new File();
        $fil->Codigo=$request->codigo;  
        $file=$request->file('file');
         $id=time().$file->getClientOriginalName();
         $file->move(public_path().'/images/'.$id);
         //dd($id);
         $file_route=time().$file->getClientOriginalName();
         $fil->UrlFile=$file_route;

         $fil->afiliado()->associate($afiliado);

         $fil->save(); 
         flash('Se ha cargado el archivo de forma exitosa.', 'success');  
      }

    	flash('Se ha registrado de forma exitosa.', 'success');

        return redirect()->route('afiliados.index');
  }
}
