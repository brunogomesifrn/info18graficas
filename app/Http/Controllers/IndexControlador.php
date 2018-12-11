<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexControlador extends Controller
{
    function index(){
    	$graficas = grafica::all();
    	return view('pagina1', compact('graficas'));
    }
}
