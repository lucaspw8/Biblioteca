<?php

namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\usuarioRequest;
class UsuarioController extends Controller
{
    private $user;
    public function __construct(Usuario $user) {
        $this->user = $user;
    }

    public function index()
    {
        $menu = "usuario";
        session_start();
        if (isset($_SESSION["loginAdm"])) {
            $title = "Usuários";
            $listaUser = DB::table('usuarioorder')->paginate(1);
            return view('usuarioview', compact('listaUser', 'title', 'menu'));
        } else {
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
        
        $menu = "usuario";
        session_start();
        if (isset($_SESSION["loginAdm"])) {
        $title = 'Cadastrar Usuários';
        return view('usuarioNew', compact('title','menu'));
        } else {
            return view('erroLogin', compact('menu'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(usuarioRequest $request)
    {
        $menu = "usuario";
        $dados = $request->all();
        $verif = $this->user->create($dados);
        if($verif){
            return redirect()->route('usuario.index', compact('menu'));
        }
        else{
            return redirect()->route('usuario.create', compact('menu'));
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
        $menu = "usuario";
        session_start();
        if (isset($_SESSION["loginAdm"])) {
        $user = $this->user->find($id);
        $title = $user->login;
        return view('usuarioShow', compact('user','title','menu'));
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
        $menu = "usuario";
         session_start();
        if (isset($_SESSION["loginAdm"])) {
        $userEdit = $this->user->find($id);
        $title = "Editar Livro $userEdit->login";
        return view('usuarioEditar', compact('title','userEdit', 'menu'));
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
    public function update(usuarioRequest $request, $id)
    {
        $menu = "usuario";
        $dados = $request->all();
        $user = $this->user->find($id);
        $verif = $user->update($dados);
        if($verif)
            return redirect()->route('usuario.index', compact('menu'));
        else 
            return redirect()->route('usuario.edit', compact ('menu') ,$id)->with(['errors' => 'Erro ao editar']);
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
        $menu = "usuario";
        if($verif){
            return redirect()->route('livro.index', compact('menu'));
        }
        else{
            return redirect ()->route ('livro.show', compact('menu') ,$id)->with (['errors'=>'Erro ao Deletar']);
        }
    }
}
