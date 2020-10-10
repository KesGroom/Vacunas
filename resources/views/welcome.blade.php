{{-- hereda plantilla --}}
@extends('layouts.plantilla')
{{-- parametro titulo - pag. --}}
@section('title', 'Inicio')
{{-- contenido en la plantilla --}}
@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
            @endif
        </div>
        @endif
        <li class="nav-item">
            <a class="nav-link" href="{{url('Users/index') }}">Ver usuario</a>
        </li>
        <form class="form-inline ml-3" action="{{route('vaccines.index')}}" method="GET">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" name="search" type="search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

