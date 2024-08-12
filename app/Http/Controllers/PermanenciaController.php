<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permanencia;
use App\Models\Materia;
use App\Models\Professor;

class PermanenciaController extends Controller{
    function listar() {
        $permanencias= Permanencia::orderBy('id')->get();
        return view('listagemPermanencias', compact('permanencias'));
    }

    function novo() {
        $permanencia= new Permanencia();
        $permanencia->id = 0;

        $materias = Materia::orderBy('descricao')->get();
        $professores = Professor::orderBy('nome')->get();

        return view('form_permanencia', compact('permanencia', 'materias','professores'));
    }

    
    function salvar(Request $request) {
        if ($request->input("id") == 0) {
            $permanencia = new Permanencia();
        } else {
            $permanencia = Permanencia::find($request->input('id'));
        }
        $permanencia->horario_a = $request->input('horario_a');
        $permanencia->horario_b = $request->input('horario_b');
        $permanencia->local = $request->input('local');
        $permanencia->materia_id = $request->input('materia_id');
        $permanencia->professor_id = $request->input('professor_id');
        $permanencia->save();
        return redirect('/listagemPermanencias');

       /* <th scope="col">#</th>
        <th scope="col">Professor</th>
        <th scope="col">Materia</th>
        <th scope="col">inicio</th>
        <th scope="col">fim</th>
        <th scope="col">local</th>
        <th scope="col">Excluir</th>
        <th scope="col">Editar</th>
        </tr>*/


    }

    function editar($id) {
        $permanencia = Permanencia::find($id);

        $materias = Materia::orderBy('descricao')->get();
        $professores = Professor::orderBy('nome')->get();


        return view('form_permanencia', compact('permanencia', 'materias', 'professores'));
    }

    function excluir($id) {
        $permanencia = Permanencia::find($id);
        $permanencia->delete();
        return redirect('/listagemPermanencias');        
    }


}