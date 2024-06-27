<?php

namespace App\Http\Controllers;
use App\Models\Usuario;


use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function index(){
        $usuarios = Usuario::all();
        return view('Usuario/usuarios', compact('usuarios'));
    }


    public function create(){
        return view('Usuario/usuarios');
    }

    public function store(Request $request){
        $usuarios = new Usuario();
        $usuarios->codigo = $request->codigo;
        $usuarios->nombre = $request->nombre;
        $usuarios->tfno = $request->tfno;
        $usuarios->direccion = $request->direccion;
        $usuarios->save();

        return redirect()->route('usuarios.create');  ///
    }

    public function show($id){
        $usuarios = Usuario::find($id);
        return view('Usuario/show', compact('usuarios'));
    }

    public function edit($id){
        $usuarios = Usuario::find($id);
        return view('Usuario/edit', compact('usuarios'));
    }

    public function update(Request $request, Usuario $usuarios){
        $usuarios->update($request->all());
        return redirect()->route('Usuario/usuarios');

    }

    public function destroy(Usuario $usuarios){
        $usuarios->delete();
        return redirect()->route('usuarios.create');
    }

}
