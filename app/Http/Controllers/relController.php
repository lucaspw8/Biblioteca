<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disciplina;
use App\Livro;
class relController extends Controller
{
    public function teste(){
        $disciplina = Disciplina::where('id','7')->get()->first();
        echo "<h1>$disciplina->nome</h1>";
        
        $livros = $disciplina->livros;
        
        foreach ($livros as $livro){
            echo "<br> $livro->titulo";
        }
    }
    
    public function testeinverse(){
        //$livro = Livro::where('titulo','Fundamentos da Fisica')->get()->first();
        $livro = Livro::find(2);
        echo "<h1>$livro->titulo</h1>";
        
        $disciplina = $livro->disciplinas;
        
        foreach ($disciplina as $disc){
            echo "<br> $disc->nome $disc->id";
        }
    }
    
    
    public function insert(){
        
        $dataform = [2,9];
        $livro = Livro::find(1);
        
         echo "<h1>$livro->titulo</h1>";
        
         $livro->disciplinas()->attach($dataform);
    }
    
    
    //Parte Disciplina -> Livro
    public function discLivro($id){
       $menu = "disciplina";
        session_start();
    if(isset($_SESSION["loginAdm"]) || isset($_SESSION["loginUsu"] )){
        $livro = Livro::all();
        return view('Disc_Livro_assoc', compact('id','menu','livro'));
    }
    else{
            return view('erroLogin', compact('menu'));
        }
    }
   
    public function discLivro_Insert(Request $request){
        $dados = $request->all();
        
        $disciplina = Disciplina::find($dados['id']);
        
        $disciplina->livros()->attach($dados['id_livro']);
        
        return redirect()->route('disciplina.index');
    }
}
