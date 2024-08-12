@extends('template.app')

@section('conteudo')

    <h1>Lista de Materias</h1>
    <a class="btn-wide btn btn-success" href="listagemMaterias/novo">Novo</a>
    <p></p>
  <!--   <table class="table table-striped table-bordered"> -->
  <div class="main-card mb-3 card">
<div class="card-body">
<table class="mb-0 table table-striped table-sm ">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Materia</th>
        <th scope="col">Excluir</th>
        <th scope="col">Editar</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($materias as $materia)
          <tr>
          <th scope="row">{{ $materia->id }}</th>
          <td>{{ $materia->descricao }}</td>
          <td><a href="/listagemMaterias/excluir/{{$materia->id}}" class="btn btn-danger">-</a></td>
          <td><a href="/listagemMaterias/editar/{{$materia->id}}" class="btn btn-primary">+</a></td>
          </tr>
      @endforeach    
    
            
    </tbody>
    </table>  
    </div>
</div>
</div>  
@endsection