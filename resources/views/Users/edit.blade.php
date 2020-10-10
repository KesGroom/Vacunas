@extends('layouts.plantilla')
@section('title', 'Editar')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Editar El usuario</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action=" {{ route('users.update',$user) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">id del producto</label>

                            <div class="col-md-6">
                                <input id="id" type="id" class="form-control @error('NIP') is-invalid @enderror"
                                    name="id" value="{{ $user->NIP }}" required autocomplete="id">

                                @error('NIP')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Precio Inicial En
                                Col</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ $user->name }}" required autocomplete="name">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">Precio Inicial En
                                Col</label>

                            <div class="col-md-6">
                                <input id="lastname" type="lastname"
                                    class="form-control @error('lastname') is-invalid @enderror" lastname="lastname"
                                    value="{{ $user->lastname }}" required autocomplete="lastname">

                                @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">Precio Inicial En
                                Col</label>

                            <div class="col-md-6">
                                <input id="date_of_birth" type="date_of_birth"
                                    class="form-control @error('date_of_birth') is-invalid @enderror"
                                    date_of_birth="date_of_birth" value="{{ $user->date_of_birth }}" required
                                    autocomplete="date_of_birth">

                                @error('date_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="document_type" class="col-md-4 col-form-label text-md-right">Precio Inicial En
                                Col</label>

                            <div class="col-md-6">
                                <input id="document_type" type="document_type"
                                    class="form-control @error('document_type') is-invalid @enderror"
                                    document_type="document_type" value="{{ $user->document_type }}" required
                                    autocomplete="document_type">

                                @error('document_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Actualizar usuario </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
