<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WorkWithUs;
use App\Afiliado;
use App\Beneficiario;

class FrontController extends Controller
{
    public function index () {
    	return view('front.index');
    }

    public function work_with_us (Request $request) {
    	$trabajo = new WorkWithUs;
    	$trabajo->first_name = $request->first_name;
    	$trabajo->last_name = $request->last_name; 
    	$trabajo->identification = $request->identification; 
    	$trabajo->age = $request->age; 
    	$trabajo->departamento = $request->departamento; 
    	$trabajo->ciudad = $request->ciudad; 
    	$trabajo->phone = $request->phone; 
    	$trabajo->cellphone = $request->cellphone; 
    	$trabajo->email = $request->email; 
    	$trabajo->profession = $request->profession; 
    	$trabajo->expeciality = $request->expeciality; 
    	$trabajo->trabajar_como = $request->trabajar_como;

    	$trabajo->save();

    	flash('Se ha registrado de forma exitosa.', 'success');

        return back(); 
    }

    public function affiliations (Request $request) {
    	
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

    	flash('Se ha registrado de forma exitosa.', 'success');

        return back();
    }
}
