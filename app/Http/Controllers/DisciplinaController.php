<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Disciplina;
use App\Curso;
class DisciplinaController extends Controller
{
    private $disc;
    public function __construct(Disciplina $disc) {
        $this->disc = $disc;
    }

    public function index()
    {
        $menu = "disciplina";
        session_start();
         if(isset($_SESSION["loginAdm"]) || isset($_SESSION["loginUsu"] )){
               
         $title = 'Disciplinas';
        //$listaLivro = $this->livro->all();
        //$listaLivro = DB::select('select * from livros order by titulo');
         $listaDisciplina = DB::table('disciplinaview')->paginate(10);
         $curso = Curso::all();
         
        //$listaDisciplina = $curso->disciplina()->get();
        
        
        return view('disciplina', compact('listaDisciplina','curso','title','menu'));
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
        $menu = 'disciplina';
        session_start();
     if(isset($_SESSION["loginAdm"])){
        $curso = Curso::all();
        return view('disciplinaNew', compact('menu','curso'));
     } else {
            return view('erroLogin', compact('menu'));
        }
    }

    public function store(Request $request)
    {
        $this->disc->nome =$request->input('nome');
        $this->disc->id_sem =$request->input('id_sem');
        $this->disc->curso_id =$request->input('curso_id');
        
        $verif =$this->disc->save();
       
        
        $menu = "disciplina";
        
        
       
        if($verif){
            return redirect()->route('disciplina.index');
        }
        else{
            return redirect()->route('disciplina.create');
        }
    }
    

  
    public function show($id)
    {
        
        $menu = "disciplina";
        session_start();
     if(isset($_SESSION["loginAdm"])){
            $disc = $this->disc->find($id);
            $title = $disc->nome;
        
        return view('disciplinaShow', compact('disc','title','menu'));
      } else {
            return view('erroLogin', compact('menu'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = "disciplina";
         session_start();
     if(isset($_SESSION["loginAdm"])){
        $disciEdit = $this->disc->find($id);
        $title = "Editar Disciplina $disciEdit->nome";
        return view('disciplinaEdit', compact('title','disciEdit','menu'));
        } else {
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
    public function update(Request $request, $id)
    {
        $dados = $request->all();
        $disc = $this->disc->find($id);
        
        $verif = $disc->update($dados);
        $menu = "disciplina";
        if ($verif)
            return redirect()->route('disciplina.index', compact('menu'));
        else
            return redirect()->route('disciplina.edit', compact('menu'), $id)->with(['errors' => 'Erro ao editar']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disc = $this->disc->find($id);
        $verif = $disc->delete();
        
        if($verif){
            return redirect()->route('disciplina.index');
        }
        else{
            return redirect ()->route ('disciplina.show', $id)->with (['errors'=>'Erro ao Deletar']);
        }
    }
}
