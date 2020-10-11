@extends('layouts.plantilla')
@section('title', 'Crear')
@section('content')
    <form action="{{route('vaccines.store')}}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="id" class="col-md-4 col-form-label text-md-right">id del producto</label>
            <div class="col-md-6">
                <input id="id" type="id" class="form-control @error('id') is-invalid @enderror" name="id"
                    value="{{ old('id') }}" required autocomplete="id">
                @error('id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Crear nuevo producto</button>
    </form>
@endsection
