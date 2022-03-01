<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(){
        $contatos = [
            (object)["nome"=>"Maria","tel"=>"51982760474"],
            (object)["nome"=>"Rafa","tel"=>"5191961163"]
        ];

        return view('contato.index',compact('contatos'));
    }

    public function criar(Request $req){
        // recebe a info do input 
        dd($req['nome']);
        return "Esse é o Criar do ContatoController";
    }

    public function editar(){
        return "Esse é o Editar do ContatoController";
    }
}
