<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reclamacao;

class ReclamacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reclamacao = Reclamacao::orderBy('dtCriacao', 'ASC')->get();
        return view('Reclamacao', compact('reclamacao'));
        
    }
    
    public static function totaldeRec(){
        $reclamacao = Reclamacao::all()->count();
        return $reclamacao;
    }   
    
    
    public function allRec(){
        $contatos = Reclamacao::all();      
        return $contatos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reclamacao = new Reclamacao();

        $reclamacao -> idLab = $request -> selReclamacao;
        $reclamacao -> pc = $request -> txPc;
        $reclamacao -> titulo = $request -> txTitulo;
        $reclamacao -> descricao = $request -> txDescricao;
        $reclamacao -> dtCriacao = $request -> txDtcriacao;

        $reclamacao -> save();
        return redirect('/reclamacao');
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idRec)
    {
        $reclamacao = new Reclamacao();
        $reclamacao->where('idRec', '=', $idRec)->delete();
        return redirect('/reclamacao');
    }
}
