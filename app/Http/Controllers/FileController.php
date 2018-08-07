<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\File;

class FileController extends Controller
{
    //

    /**
* muestra el formulario para guardar archivos
*
* @return Response
*/

public function store(Request $request){

	

	//$fil= new File();
	//$fil->codigo=$request->codigo;	
	//$img=$request->file('file');
	//$file_route=time().$img->getClientOriginalName();
	//storage::disk('imgFile')->put($file_route, file_get_contents($img->getRealPath() ) );
	//$fil->UrlFile=$file_route;
	//$file->save();
	 
	if($request->hasFile('file')){
	    $fil= new File();
	    $fil->codigo=$request->codigo;	
	    $file=$request->file('file');
	     $id=time().$file->getClientOriginalName();
	     $file->move(public_path().'/images/'.$id);
	     //dd($id);
	     $file_route=time().$file->getClientOriginalName();
	     $fil->UrlFile=$file_route;
	     $fil->save();
	     //return $id;
	     return back();
	}
				
	
}

}
