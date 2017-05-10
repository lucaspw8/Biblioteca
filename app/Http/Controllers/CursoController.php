<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Semestre;
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
        $menu = "curso";
        session_start();
        if(isset($_SESSION["loginAdm"]) || isset($_SESSION["loginUsu"] )){
        $title = "Lista de Cursos";
        $listaC = DB::select('select * from cursos order by nome');
        return view('cursoLista', compact('listaC', 'title','menu'));
        }
        else{
             return view('erroLogin', compact('menu'));
        }
    }

    public function teste(){
        $curso = Curso::find(1);
        echo $curso->nome;
        
        $semestres = $curso->semestres()->get();
        
        foreach ($semestres as $semestre){
            echo "<div>$semestre->semestre </div>";
        }
    }

    public function create() {
        $menu = "curso";
         session_start();
        if(isset($_SESSION["loginAdm"])){
        $title = "Cadastro de Cursos";
        return view('cursoNew', compact('title','menu'));
        }else{
             return view('erroLogin', compact('menu'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(cursoRequest $request) {
        $dados = $request->all();
        $menu = "curso";

        $verif = $this->curso->create($dados);
        if ($verif) {
            return redirect()->route('curso.index', compact('menu'));
        } else {
            return redirect()->route('curso.create', compact('menu'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $menu = "curso";
         session_start();
        if(isset($_SESSION["loginAdm"])){
        $curso = $this->curso->find($id);
        $title = $curso->nome;
        return view('cursoShow', compact('curso','title','menu'));
        }else{
             return view('erroLogin', compact('menu'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $menu = "curso";
        session_start();
        if(isset($_SESSION["loginAdm"])){
        $curso = $this->curso->find($id);
        $title = "Editar Curso $curso->nome";
        return view('cursoEdit', compact('title', 'curso','menu'));
        }else{
             return view('erroLogin', compact('menu'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $menu = "curso";
        $dados = $request->all();
        $curso = $this->curso->find($id);
        $verif = $curso->update($dados);
        if ($verif)
            return redirect()->route('curso.index', compact('menu'));
        else
            return redirect()->route('curso.edit', compact('menu') ,$id)->with(['errors' => 'Erro ao editar']);
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
            return redirect()->route('curso.index', compact('menu'));
        }
        else{
            return redirect ()->route ('curso.show', compact('menu') ,$id)->with (['errors'=>'Erro ao Deletar']);
        }
    }

}
