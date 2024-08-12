@extends('template.app')

@section('conteudo')
<h1>Formulário de materia</h1>
<form action="{{route('listagemMaterias.salvar')}}" method="POST">
@csrf  
<div class="mb-3">
  <label for="id" class="form-label">ID</label>
  <input readonly type="text" class="form-control" id="id" name="id" value="{{$materia->id}}">
</div>
<div class="mb-3">
  <label for="descricao" class="form-label">materia</label>
  <input type="text" class="form-control" id="descricao" name="descricao" value="{{$materia->descricao}}">
</div>
<button type="submit" class="btn-wide btn btn-success">Salvar</button>
</form>    
@endsection  