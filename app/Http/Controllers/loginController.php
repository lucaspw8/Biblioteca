<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class loginController extends Controller
{
    public function login(Request $request){
       $dados= $request->all();
       $login = $dados['login'];
       $senha = $dados['senha'];
       $consulta = DB::select("select * from gerente where login = '$login' and senha = '$senha'");
       $contAdm = count($consulta);
       
       if($contAdm == 1){
           foreach ($consulta as $login2){
               session_start();
               $_SESSION["loginAdm"] = $login2->login;
               $_SESSION["idLoginAdm"] = $login2->id;
               
               return redirect()->route('livro.index');
           }
            
       }
       else {
            $consulta = DB::select("select * from usuarios where login = '$login' and senha = '$senha'");
            $contUsu = count($consulta);
            
           if($contUsu == 1){
           
               foreach ($consulta as $login2) {
                    session_start();
                    $_SESSION["loginUsu"] = $login2->login;
                    $_SESSION["idLoginUsu "] = $login2->id;

                    return redirect()->route('livro.index');
                }
              }         

            
        }
        $erro = "Login ou senha invalidos";
        return view('login', compact('erro'));
    }
}
