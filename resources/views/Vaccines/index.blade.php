@extends('layouts.plantilla')
@section('title', 'Listar')
@section('content')
    <style>
        .espacio {
            margin-left: 100px;
        }
    </style>
    <table class="table table-hover" style="width:100%">
        <thead>
            <th class="espacio" scope="col">Edad del paciente</th>
            <th scope="col">Nombre</th>
            <th scope="col">Dose vaccine</th>
            <th scope="col">aplicacion date</th>
            <th scope="col">laboratory</th>
            <th></th>
            <th scope="col">IPS</th>
            <th></th>
            <th scope="col">reinforcement</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($vaccines as $vaccine)
            <tr>
                <td>{{$vaccine->age_patient}}</td>
                <td>{{$vaccine->name_vaccine}}</td>
                <td>{{$vaccine->dose_vaccine}}</td>
                <td>{{$vaccine->application_date}}</td>
                <td>{{$vaccine->laboratory}}</td>
                <td>{{$vaccine->IPS}}</td>
                <td>{{$vaccine->reinforcement}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
