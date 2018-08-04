<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    //

    /**
* muestra el formulario para guardar archivos
*
* @return Response
*/

public function store(Request $request){
	
	if($request->hasFile('file')){
	     $file=$request->file('file');
	     $id=time().$file->getClientOriginalName();
	     $file->move(public_path().'/images/'.$id);
	     dd($id);
	     return $id;
	}
				
	
}

}
