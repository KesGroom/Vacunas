@extends('layouts.plantilla')
@section('title', 'Listar')
@section('content')
<table class="table table-hover" style="width:100%">
    <thead>
        <th>id</th>
        <th>Nombre</th>
        <th>last Name</th>
        <th>date_of_birth</th>
        <th>document_type</th>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->lastname}}</td>
            <td>{{$user->date_of_birth}}</td>
            <td>{{$user->document_type}}</td>
            <td>Editar Perfil</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
