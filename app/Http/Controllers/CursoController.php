<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\cursoRequest;

class CursoController extends Controller {

    private $curso;

    public function __construct(Curso $curs) {
        $this->curso = $curs;
    }

    public function index() {

        //$listaC = $this->curso->all();
        $title = "Lista de Cursos";
        $listaC = DB::select('select * from cursos order by nome');
        return view('cursoLista', compact('listaC', 'title'));
    }

    public function create() {
        $title = "Cadastro de Cursos";
        return view('cursoNew', compact($title));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(cursoRequest $request) {
        $dados = $request->all();


        $verif = $this->curso->create($dados);
        if ($verif) {
            return redirect()->route('curso.index');
        } else {
            return redirect()->route('curso.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $curso = $this->curso->find($id);
        $title = $curso->nome;
        return view('cursoShow', compact('curso','title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $curso = $this->curso->find($id);
        $title = "Editar Curso $curso->nome";
        return view('cursoEdit', compact('title', 'curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $dados = $request->all();
        $curso = $this->curso->find($id);
        $verif = $curso->update($dados);
        if ($verif)
            return redirect()->route('curso.index');
        else
            return redirect()->route('curso.edit', $id)->with(['errors' => 'Erro ao editar']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $curso = $this->curso->find($id);
        $verif = $curso->delete();
        
        if($verif){
            return redirect()->route('curso.index');
        }
        else{
            return redirect ()->route ('curso.show', $id)->with (['errors'=>'Erro ao Deletar']);
        }
    }

}
