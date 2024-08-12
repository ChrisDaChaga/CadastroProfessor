
@extends('template.app')


@section('conteudo')

<h1>Formulário de novos Professores</h1>

<form action="{{route('listagemProfessores.salvar')}}" method="POST">
@csrf 
<div class="mb-3">
  <label for="id" class="form-label">ID</label>
  <input readonly type="text" class="form-control" id="id" name="id" value="{{$professor->id}}">
</div>

<div class="mb-3">
  <label for="nome" class="form-label">Professor</label>
  <input type="text" class="form-control" id="nome" name="nome" value="{{$professor->nome}}">
</div>
<button type="submit" class="btn-wide btn btn-success">Salvar</button>
</form>    
@endsection