<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livro;
use App\Http\Requests\livroRequest;
use Illuminate\Support\Facades\DB;
class LivroController extends Controller
{
    private $livro;
    public function __construct(Livro $li) {
        $this->livro = $li;
    }


        // Compara se $a é maior que $b
         
    public function index()
    {
        $title = 'Livros';
        //$listaLivro = $this->livro->all();
        //$listaLivro = DB::select('select * from livros order by titulo');
        $listaLivro = DB::table('livroView')->paginate(10);
        return view('livro', compact('listaLivro','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastrar Livro';
        return view('livronew', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(livroRequest $request)
    {
        //Recebe todos os dados do formulario
        $dados = $request->all();
        
        
        $verif = $this->livro->create($dados);
        if($verif){
            return redirect()->route('livro.index');
        }
        else{
            return redirect()->route('livro.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livro = $this->livro->find($id);
        $title = $livro->titulo;
        return view('livroShow', compact('livro','title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livroEdit = $this->livro->find($id);
        $title = "Editar Livro $livroEdit->titulo";
        return view('livroEditar', compact('title','livroEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(livroRequest $request, $id)
    {
        $dados = $request->all();
        $livro = $this->livro->find($id);
        $verif = $livro->update($dados);
        if($verif)
            return redirect()->route('livro.index');
        else 
            return redirect()->route('livro.edit', $id)->with(['errors' => 'Erro ao editar']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livro = $this->livro->find($id);
        $verif = $livro->delete();
        
        if($verif){
            return redirect()->route('livro.index');
        }
        else{
            return redirect ()->route ('livro.show', $id)->with (['errors'=>'Erro ao Deletar']);
        }
    }
}
