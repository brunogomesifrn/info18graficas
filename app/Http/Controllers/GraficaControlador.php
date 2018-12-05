<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\grafica;
use Auth;

class GraficaControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $graficas = grafica::all(); // lista todas as graficas do banco e joga na variavel
       return view('grafica', compact('graficas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grafica_cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        $cnpj = $request->input('cnpj');
        $endereco = $request->input('endereco');

       $grafica = new grafica(); 
       $grafica->nome = $nome;
       $grafica->cnpj = $cnpj;
       $grafica->endereco = $endereco;
       $grafica->user_id = Auth::user()->id;

       $grafica->save();

       return redirect('/grafica');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grafica = grafica::find($id);
        return view('/grafica_cadastrar', compact('grafica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $nome = $request->input('nome');
        $cnpj = $request->input('cnpj');
        $endereco = $request->input('endereco');
        $id = $request->input('id');

        $grafica = grafica::find($id);
        $grafica->nome = $nome;
       $grafica->cnpj = $cnpj;
       $grafica->endereco = $endereco;

       $grafica->save();

       return redirect('/grafica');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grafica = grafica::find($id);
        $grafica->delete();
        return redirect('/grafica');
    }
}
