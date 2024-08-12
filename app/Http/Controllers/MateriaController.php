<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;


class MateriaController extends Controller{
    function ola() {
        
        var_dump($materias);
    }


    function listar() {
        //$materias = DB::select('select * from materia');
        //return view("listagemMaterias");
        $materias = Materia::all();
        return view('listagemMaterias', compact('materias'));
    }

   

    function novo() {
        $materia = new Materia();
        $materia->id = 0;
        return view('form_materia', compact('materia'));
    }

    function excluir($id) {
        $materia = Materia::find($id);
        $materia->delete();
        return redirect('/listagemMaterias');
    }

    function editar($id) {
        $materia = Materia::find($id);
        return view("form_materia", compact('materia'));

    }
    function salvar(Request $request) {
        
        $validatedData = $request->validate([
            'descricao' => ['required', 'min:3'],
        ]);
        

        if ($request->input('id') == 0) {
            $materia = new Materia();
        } else {
            $materia = Materia::find($request->input('id'));
        }
        $materia->descricao = $request->input('descricao');
        $materia->save();
        return redirect('/listagemMaterias');
    }

}