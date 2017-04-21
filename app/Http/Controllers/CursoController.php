<?php

namespace App\Http\Controllers;
use App\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    private $curso;
    public function __construct(Curso $curs) {
        $this->curso = $curs;
    }

        public function index()
    {
        $listaC = $this->curso->all();
        return view('cursoLista', compact($listaC));
    }
    
    public function teste(){
       $verif = $this->curso->create([
           'nome'           => 'Mecatrônica2',
           'coordenador'    =>'Diego'
        ]);
       
       if($verif){
           return 'Deu certo';
       }
       else{
           return 'Erro';
       }
    }

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
        //
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
    public function destroy($id)
    {
        //
    }
}
