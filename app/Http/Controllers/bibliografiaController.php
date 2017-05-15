<?php

namespace App\Http\Controllers;
use App\Curso;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class bibliografiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = 'bibliografia';
        session_start();
         if(isset($_SESSION["loginAdm"]) || isset($_SESSION["loginUsu"] )){
        $curso = Curso::all();
        $bibliografia = DB::select('SELECT c.nome as curso, d.nome as disciplina,d.id_sem as semestre, l.titulo, l.qtd, 
            l.disponivel from cursos c, disciplinas d,livros l,rel_disciplinas_livros rel
                WHERE  d.curso_id = c.id and rel.disciplina_id= d.id and rel.livro_id = l.id ORDER BY c.nome,d.id_sem,d.nome ');
       
        
        return view('bibliografia', compact('menu','curso','bibliografia'));
        }
        else{
            return view('erroLogin', compact('menu'));
        }
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
    public function store(Request $r)
    {
         $dados = $r->all();
        

        $menu = 'bibliografia';
        session_start();
         if(isset($_SESSION["loginAdm"]) || isset($_SESSION["loginUsu"] )){
        $curso = Curso::all();
        $bibliografia = DB::select("SELECT c.nome as curso, d.nome as disciplina,d.id_sem as semestre, l.titulo, l.qtd, 
            l.disponivel from cursos c, disciplinas d,livros l,rel_disciplinas_livros rel
                WHERE c.id ='$dados[curso_id]' and  d.curso_id = c.id and rel.disciplina_id= d.id and rel.livro_id = l.id ORDER BY c.nome,d.id_sem,d.nome ");
       
        
        return view('bibliografia', compact('menu','curso','bibliografia'));
        }
        else{
            return view('erroLogin', compact('menu'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $r)
    {


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
