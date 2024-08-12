
@extends('template.app')

@section('conteudo')
    <h1>Lista de Professores</h1>
    <a class="btn-wide btn btn-success" href="listagemProfessores/novo">Novo</a>
    <p></p><div class="main-card mb-3 card">
<div class="card-body">
<table class="mb-0 table table-striped table-sm ">
   <!--  <table class="table table-striped table-bordered"> -->
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Excluir</th>
        <th scope="col">Editar</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($professores as $professor)
          <tr>
          <th scope="row">{{ $professor->id }}</th>
          <td>{{ $professor->nome }}</td>
          <td><a href="/listagemProfessores/excluir/{{$professor->id}}" class="btn btn-danger">-</a></td>
          <td><a href="/listagemProfessores/editar/{{$professor->id}}" class="btn btn-primary">+</a></td>
          </tr>
      @endforeach    
            
    </tbody>
    </table>   
    </div>
</div>
</div> 
@endsection