
@extends('template.app')


@section('conteudo')



<h1>Formulário de Permanencia</h1>
<form action="{{route('listagemPermanencias.salvar')}}" method="POST">
@csrf
  <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input readonly type="text" class="form-control" id="id" name="id" value="{{$permanencia->id}}">
  </div>

  <div class="mb-3">
    <label for="materia_id" class="form-label">Materia</label>
    <select class="form-select" id="materia_id" name="materia_id">
    @foreach($materias as $materia)
                <option 
                    @if ($materia->id == $permanencia->materia_id) 
                        selected
                    @endif
                value="{{$materia->id}}">{{$materia->descricao}}</option>
            @endforeach
      
      
    </select>    
  </div>
  <div class="mb-3">
    <label for="materia_id" class="form-label">Professor</label>
    <select class="form-select" id="professor_id" name="professor_id">
    @foreach($professores as $professor)
                <option 
                    @if ($professor->id == $permanencia->professor_id) 
                        selected
                    @endif
                value="{{$professor->id}}">{{$professor->nome}}</option>
            @endforeach
      
      
    </select>    
  </div>
  
  <div class="mb-3">
    <label for="inicio" class="form-label">Inicio</label>
    <input type="text" class="form-control" id="horario_a" name="horario_a" value="{{$permanencia->horario_a}}">
  </div>
  <div class="mb-3">
    <label for="inicio" class="form-label">Fim</label>
    <input type="text" class="form-control" id="horario_b" name="horario_b" value="{{$permanencia->horario_b}}">
  </div>
  <div class="mb-3">
    <label for="local" class="form-label">Sala</label>
    <input type="text" class="form-control" id="local" name="local" value="{{$permanencia->local}}">
  </div>
  
  <button type="submit" class="btn-wide btn btn-success">Salvar</button>
</form>
@endsection