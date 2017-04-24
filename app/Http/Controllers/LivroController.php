<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livro;
use App\Http\Requests\livroRequest;
class LivroController extends Controller
{
    private $livro;
    public function __construct(Livro $li) {
        $this->livro = $li;
    }


    public function index()
    {
        $title = 'Livros';
        $listaLivro = $this->livro->all();
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
        //Validação de Dados
       
       // $this->validate($request, $this->livro->regras);
        
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
