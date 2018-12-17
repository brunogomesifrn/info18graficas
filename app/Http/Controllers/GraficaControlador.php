<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\grafica;
use App\servico;
use App\pedido;
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
    {   $servicos = servico::all();
        return view('grafica_cadastrar', compact('servicos'));
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
        $servicos = $request->input('servicos');

       $grafica = new grafica(); 
       $grafica->nome = $nome;
       $grafica->cnpj = $cnpj;
       $grafica->endereco = $endereco;
       

       $grafica->user_id = Auth::user()->id;

       $grafica->save();
       $grafica->servicos()->sync($servicos);
       return redirect('/grafica');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $servicos = servico::find($id);
        $grafica = grafica::find($id);
        return view('/grafica_detalhes', compact('grafica', 'servicos'));
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
        $servicos = servico::all();
        return view('/grafica_cadastrar', compact('grafica', 'servicos'));
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
        
        $servicos = $request->input('servicos');

        $grafica = grafica::find($id);
        $grafica->nome = $nome;
       $grafica->cnpj = $cnpj;
       $grafica->endereco = $endereco;


       $grafica->save();
       $grafica->servicos()->sync($servicos);

 
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

     public function fazer_pedido(Request $request)
    {
       $pedido = new Pedido();
       $pedido->$descricao = $request->input('descricao');
       $pedido->$servico_id = $request->input('servico');
       $pedido->$data = date();
       $pedido->user_id = Auth::user()->id;

       $pedido->save();
       $grafica->servicos()->sync($servicos);
       return redirect('/pedidos');
      
    }

    public function fazer_orcamento(){
        $servicos = servico::all();
        return view('/orcamento', compact('servicos'));
    }

    public function meus_pedidos(){
        $pedidos = pedido::all();
        return view('/pedidos', compact('pedidos'));
    }
}
