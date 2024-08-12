@extends('template.app')

@section('conteudo')

<h1>Lista de Permanencia</h1>


<a class="btn-wide btn btn-success" href="listagemPermanencias/novo">Novo agendamento</a>
<p></p>
<!-- <table class="table table-striped table-bordered"> -->
<div class="main-card mb-3 card">
<div class="card-body">
<table class="mb-0 table table-striped table-sm ">
<thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Professor</th>
    <th scope="col">Materia</th>
    <th scope="col">inicio</th>
    <th scope="col">fim</th>
    <th scope="col">local</th>
    <th scope="col">Excluir</th>
    <th scope="col">Editar</th>
    </tr>
</thead>
<tbody>
@foreach ($permanencias as $permanencia)
        <tr>
        <th scope="row">{{ $permanencia->id }}</th>
        <td>{{ $permanencia->professor->nome }}</td>
        <td>{{ $permanencia->materia->descricao }}</td>
        <td>{{ $permanencia->horario_a }}</td>
        <td>{{ $permanencia->horario_b }}</td>
        <td>{{ $permanencia->local }}</td>
        <td><a href="/listagemPermanencias/excluir/{{$permanencia->id}}" class="btn btn-danger">-</a></td>
        <td><a href="/listagemPermanencias/editar/{{$permanencia->id}}" class="btn btn-primary">+</a></td>
        </tr>
    @endforeach

        
</tbody>
</table>
</div>
</div>
</div>
@endsection