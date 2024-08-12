<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;
use Illuminate\Support\Facades\DB;

class ProfessorController extends Controller{
    function ola() {
        $materias = DB::select('select * from materia');
        var_dump($materias);
    }


    function listar() {
       
        $professores = Professor::all();
        return view('listagemProfessores', compact('professores'));
    }

    function novo() {
        $professor = new Professor();
        $professor->id = 0;
        return view('form_professor', compact('professor'));
    }

    function excluir($id) {
        $professor = Professor::find($id);
        $professor->delete();
        return redirect('/listagemProfessores');
    }

    function editar($id) {
        $professor = Professor::find($id);
        return view("form_professor", compact('professor'));

    }
    function salvar(Request $request) {
        
        $validatedData = $request->validate([
            'nome' => ['required', 'min:5'],
        ]);
        

        if ($request->input('id') == 0) {
            $professor = new Professor();
        } else {
            $professor = Professor::find($request->input('id'));
        }
        $professor->nome = $request->input('nome');
        $professor->save();
        return redirect('/listagemProfessores');
    }

}