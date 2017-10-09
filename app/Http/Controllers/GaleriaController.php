<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    function gerenciador(){
    	return view('galeria.gerenciador_galeria');
    }

    function atualizar(){
    	echo "updt";	
    }

    function salvar(Request $request){

    	echo "<pre>";
    	var_dump($request);
    	echo "</pre>";

    	// $imagens = Galeria::create($request->all());

     //    foreach ($request->photos as $photo) {
            
     //        $filename = $photo->store('photos');

     //    }
        // return 'Upload successful!';
    }
}
