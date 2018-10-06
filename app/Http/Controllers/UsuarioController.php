<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Http\Requests\UsuarioStoreRequest;
use App\Http\Requests\UsuarioUpdateRequest;
class UsuarioController extends Controller
{
    function index(){
        
        return Usuario::all();

    }

    function show(Usuario $usuario){

        return $usuario;

    }

    function store(UsuarioStoreRequest $request){
        $usuario = Usuario::create($request->all());
        return response()->json($usuario,201);
    }

    function update(UsuarioUpdateRequest $request){
        $usuario = Usuario::update($request->all());

        return response()->json($usuario,200);
    }

    function delete(Usuario $usuario){
        $usuario->delete();
        return response()->json('este dato ha sido borrado',204);
    }


}
